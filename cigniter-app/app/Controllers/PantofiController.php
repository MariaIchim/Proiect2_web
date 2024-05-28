<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\PantofiModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PantofiController extends BaseController
{
    public function index()
    {
        $data=[];

        $data['pantofi']=[];
        $model= new PantofiModel();
        $data['pantofi']=$model->findAll();

        helper('cookie');
        $session=session();
        if($session->has("nume") )
        {
            $data['user'] = $session->get('nume');

        }
        else
        {
            $nume=get_cookie('nume');
            if ($nume!=null)
            {
                $session->set('nume', $nume);
                $data['user'] = $session->get('nume');

            }
        }
        return view('pantofiimei', $data);

    }
    public function register()
    {
        return view('register');
    }
    public function stocareuser()
    {
        helper('cookie');
        $nume=$this->request->getPost('nume');
        $parola=$this->request->getPost('parola');
        $model=new UserModel();
        $users=$model->where('nume', $nume)->findAll();
        if(count($users)>0)
        {
            return view('register',['eroare'=>"nume deja folosit"]);
        }
        $new_user=
        [
            'nume'=>$nume,
            'parola'=>password_hash($parola, PASSWORD_DEFAULT)
        ];
        $model->insert($new_user);
        $remember=($this->request->getPost('remember-me')==='on')?true:false;
        if($remember)
        {
            set_cookie('nume', $nume, time()+3600*24*365);
        }
        else
        {
            set_cookie('nume', '', time()-1);
        }

        $session=session();
        $session->set('nume', $nume);
        return redirect()->to('/')->withCookies();
    }
    public function logout()
    {
        helper('cookie');
        set_cookie('nume', '', time()-1);

        $session=session();
        $session->destroy();
        return redirect()->to('/')->withCookies();

    }
    public function login()
    {
        return view('login');
    }
    public function autentificare()
    {
        helper('cookie');
        $nume=$this->request->getPost('nume');
        $parola=$this->request->getPost('parola');
        $model=new UserModel();
        $users=$model->where('nume', $nume)->findAll();
        if (count($users)==0)
        {
            return view('login',['eroare'=>"nu exista acest cont"]);
            
        }
        $user=$users[0];
        if(!password_verify($parola, $user['parola']))
        {
            return view('login',['eroare'=>"parola incorecta"]);

        }
        
        $remember=($this->request->getPost('remember-me')==='on')?true:false;
        if($remember)
        {
            set_cookie('nume', $nume, time()+3600*24*365);
        }
        else
        {
            set_cookie('nume', '', time()-1);
        }

        $session=session();
        $session->set('nume', $user['nume']);
        return redirect()->to('/')->withCookies();
        

    }
    public function insert()
    {
        helper('cookie');
        $session=session();
        if($session->has("nume") )
        {

            return view('insert',["user"=>$session->get('nume')]);

        }
        else
        {
            $nume=get_cookie('nume');
            if ($nume!=null)
            {
                $session->set('nume', $nume);
                return view('insert',["user"=>$session->get('nume')]);

            }
        }
        return view('insert'); 
    }
    public function insertpantofi()
    {
        $url = $this->do_upload();
        $data = [
            'nume'     => $this->request->getPost('nume'),
            'marime'   => $this->request->getPost('marime'),
            'pret'   => $this->request->getPost('pret'),
            'imagine'     => $url,
        ];

        $pantofi=new PantofiModel();

        $pantofi->insert($data);

        return redirect()->to(base_url('/'));
    }

    private function do_upload()
    {
        $type = explode('.', $_FILES["image"]["name"]);
        $type = $type[count($type) - 1];
        $url = "public/images/".uniqid(rand()).'.'.$type;
        
        if (in_array($type, array("jpg", "jpeg", "gif", "png")))
        {
            if (is_uploaded_file($_FILES["image"]["tmp_name"]))
            {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $url))
                    return $url;
            }
        }
        
        return "";
    }

    public function cautare()
    {
        $text=$this->request->getPost('cautare');

        $data=[];

        $data['pantofi']=[];
        $model= new PantofiModel();
        foreach($model->findAll() as $perechepantofi)
        {
            if(str_contains($perechepantofi['nume'], $text))
            {
                array_push($data['pantofi'], $perechepantofi);
            }
        }

        helper('cookie');
        $session=session();
        if($session->has("nume") )
        {
            $data['user'] = $session->get('nume');

        }
        else
        {
            $nume=get_cookie('nume');
            if ($nume!=null)
            {
                $session->set('nume', $nume);
                $data['user'] = $session->get('nume');

            }
        }
        return view('pantofiimei', $data);
    }

    public function delete($id)
    {
        $model = new PantofiModel();
        $model->delete($id);

        return redirect()->to('/');
    }

    public function edit($id)
    {
        $data=[];

        helper('cookie');
        $session=session();
        if($session->has("nume") )
        {

            $data['user']=$session->get('nume');

        }
        else
        {
            $nume=get_cookie('nume');
            if ($nume!=null)
            {
                $session->set('nume', $nume);
                $data['user']=$session->get('nume');

            }
        }

        $model=new PantofiModel();

        $data['perechepantofi']=$model->where('id', $id)->first();

        return view('edit', $data); 
    }

    public function editpantofi($id)
    {
        $model = new PantofiModel();

        $perechepantofi =[
           'nume'      => $this->request->getPost('nume'),
           'marime'    => $this->request->getPost('marime'),
           'pret'    => $this->request->getPost('pret'),
        ];

        $url = $this->do_upload();
        if ($url != "")
        {
            $perechepantofi['imagine'] = $url;
        }

        $model->update($id, $perechepantofi);
        return redirect()->to(base_url('/'));
    }
    public function despre()
    {
        $data=[];

        helper('cookie');
        $session=session();
        if($session->has("nume") )
        {
            $data['user'] = $session->get('nume');

        }
        else
        {
            $nume=get_cookie('nume');
            if ($nume!=null)
            {
                $session->set('nume', $nume);
                $data['user'] = $session->get('nume');

            }
        }
        return view('despre', $data);
    }
}
