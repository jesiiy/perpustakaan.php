<?php

namespace App\Controllers;
use App\Models\M_belajar;
use TCPDF;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function login()
    {
        echo view('pages-login');

    }
    public function profile()
    {
        echo view('header');
        echo view('menu');
        echo view('profile');
        echo view('footer');
    }
    public function faq()
    {
        echo view('header');
        echo view('menu');
        echo view('faq');
        echo view('footer');
    }
    public function dashboard()
    {   
        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }
    public function aksi_login()
    {
        $a=$this->request->getPost('email');
        $b=$this->request->getPost('pswd');

        $Joyce = new M_belajar;
        $data = array (
            'username' => $a,
            'password' => MD5($b),
        );

        $cek = $Joyce->getWhere('user', $data);
        print_r($cek);

        if ($cek != null) {
            session()->set('id', $cek->id_user);
            session()->set('u', $cek->username);
            session()->set('level', $cek->level);

            return redirect()->to('home/dashboard');
        }else{
            return redirect()->to('home/login');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('home/login');
    }
    public function user()
    {
        $Joyce= new M_belajar;
        $where=('id_user');
        $wendy['takdirestui']=$Joyce->tampil('user', $where);
        echo view('header');
        echo view('menu');
        echo view('user',$wendy);
        echo view('footer');
    }
    public function hapus_user($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_user' => $id);
        $wendy['takdirestui']=$Joyce->hapus('user',$wece);
        return redirect()->to('home/user');
    }
    public function edit_user($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_user' => $id);
        $wendy['takdirestui']=$Joyce->getWhere('user',$wece);
        echo view('header');
        echo view('edituser', $wendy);
        echo view('footer');
    }
    public function simpanuser()
    {
        $a=$this->request->getpost('username');
        $b=$this->request->getPost('pw');
        $c=$this->request->getPost('level');
        $id=$this->request->getPost('id');
        $Joyce= new M_belajar;
        $wece= array('id_user' =>$id);
        $data = array(
                "username"=>$a,
                "password"=>MD5($b),
                "level"=>$c
                );

        $Joyce->edit('user',$data,$wece);
        return redirect()->to('home/user');
    }
    public function simpan_user()
    {
        $a=$this->request->getpost('username');
        $b=$this->request->getPost('password');
        $c=$this->request->getPost('level');
        $data = array(
                "username"=>$a,
                "password"=>MD5($b),
                "level"=>$c
                );
        $Joyce= new M_belajar;
        $Joyce->input('user',$data);
        return redirect()->to('home/user');
    }
    public function input_user()
    {
        $Joyce= new M_belajar;
        $where=('id_user');
        $wendy['takdirestui']=$Joyce->tampil('user', $where);
        echo view('header');
        echo view('menu');
        echo view('inputuser',$wendy);
        echo view('footer');
    }

    public function siswa()
    {
        $Joyce= new M_belajar;
        $where=('id_siswa');
        $wendy['takdirestui']=$Joyce->join('siswa', 'kelas', 'siswa.id_kelas=kelas.id_kelas');
        echo view('header');
        echo view('menu');
        echo view('siswa',$wendy);
        echo view('footer');
    }
    public function hapus_siswa($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_siswa' => $id);
        $wendy['takdirestui']=$Joyce->hapus('siswa',$wece);
        return redirect()->to('home/siswa');
    }
    public function simpan_siswa()
    {
        $a=$this->request->getpost('nis');
        $f=$this->request->getpost('kelas');
        $k=$this->request->getPost('nama');
        $m=$this->request->getPost('username');
        $b=$this->request->getPost('password');
        $Joyce= new M_belajar();
        $data = array(
                
                "username"=>$m,
                "password"=>MD5($b)
            );
        $Joyce->input('user',$data);
        $where=array("username"=>$m);
        $wendy=$Joyce->getWhere('user',$where);
        $data2=array(
                "id_user"=>$wendy->id_user,
                "nama_siswa"=>$k,
                "nis"=>$a,
                "id_kelas"=>$f,
        );
        $Joyce->input('siswa',$data2);
        return redirect()->to('home/siswa');
    }
    public function input_siswa()
    {
        $Joyce= new M_belajar;
        $where=('id_siswa');
        $wendy['takdirestui']=$Joyce->tampil('siswa', $where);
        $where=('id_kelas');
        $wendy['kelas']=$Joyce->tampil('kelas',$where);
        echo view('header');
        echo view('menu');
        echo view('inputsiswa',$wendy);
        echo view('footer');
    }
    public function edit_siswa($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_siswa' => $id);
        $wendy['takdirestui']=$Joyce->join('siswa','kelas','siswa.id_kelas=kelas.id_kelas');
        echo view('header');
        echo view('editsiswa', $wendy);
        echo view('footer');
    }
    public function simpansiswa()
    {
        $a=$this->request->getpost('nama');
        $b=$this->request->getPost('nis');
        $c=$this->request->getPost('kelas');
        $id=$this->request->getPost('id');
        $Joyce= new M_belajar;
        $wece= array('id_siswa'=>$id);
        $data = array(
                "nama_siswa"=>$a,
                "nis"=>$b,
                "nama_kelas"=>$c
                );
        $Joyce->edit('siswa',$data,$wece);
        return redirect()->to('home/siswa');
    }
    public function petugas()
    {
        $Joyce= new M_belajar;
        $wendy['takdirestui']=$Joyce->join('petugas', 'user', 'petugas.id_user=user.id_user');
        echo view('header');
        echo view('menu');
        echo view('petugas',$wendy);
        echo view('footer');
    }
    public function hapus_petugas($id)
    {
        $Jocye= new M_belajar;
        $wece = array('id_user' => $id );
        $Jocye->hapus('petugas', $wece);
        $Jocye->hapus('user', $wece);
        return redirect()->to('home/petugas');
    }
    public function simpan_petugas()
    {
        $k=$this->request->getPost('nama');
        $m=$this->request->getPost('username');
        $b=$this->request->getPost('password');
        $Joyce= new M_belajar();
        $data = array(
                
                "username"=>$m,
                "password"=>MD5($b)
            );
        $Joyce->input('user',$data);
        $where=array("username"=>$m);
        $wendy=$Joyce->getWhere('user',$where);
        $data2=array(
                "id_user"=>$wendy->id_user,
                "nama_petugas"=>$k,
        );
        $Joyce->input('petugas',$data2);
        
        return redirect()->to('home/petugas');
    }
    public function input_petugas()
    {
        $Joyce= new M_belajar;
        $where=('id_petugas');
        $wendy['takdirestui']=$Joyce->tampil('petugas', $where);
        echo view('header');
        echo view('menu');
        echo view('inputpetugas',$wendy);
        echo view('footer');
    }
    public function editpetugas($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_petugas' => $id);
        $wendy['takdirestui']=$Joyce->joinw('petugas','user','petugas.id_user=user.id_user',$wece);
        echo view('header');
        echo view('editpetugas', $wendy);
        echo view('footer');
    }
    public function simpanpetugas()
    {
        $model= new M_belajar();
        $where = array('id_user' => $this->request->getPost('idu') );

        $data= array(
            'username' =>$this->request->getPost('username'),
            'password' =>$this->request->getPost('password'),
            'level' =>$this->request->getPost('level'),
        );
        $model->edit('user', $data, $where);

        $where = array("username" => $this->request->getPost('username'));
        $wendy = $model->getWhere('user', $where); 
        $Jocye = array('id_petugas' => $this->request->getPost('id'));

        $data2 = array(
            'id_user' => $wendy->id_user,
             'nama_petugas'=>$this->request->getPost('nama'),
         );
        $model->edit('petugas', $data2, $Jocye);
        return redirect()->to('home/petugas');
}
    public function kelas()
    {
        $Joyce= new M_belajar;
        $where=('id_kelas');
        $wendy['takdirestui']=$Joyce->tampil('kelas',$where);
        echo view('header');
        echo view('menu');
        echo view('kelas',$wendy);
        echo view('footer');
    }
    public function hapus_kelas($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_kelas' => $id);
        $wendy['takdirestui']=$Joyce->hapus('kelas',$wece);
        return redirect()->to('home/kelas');
    }
    public function simpan_kelas()
    {
        $a=$this->request->getpost('nama');
        $b=$this->request->getPost('id');
        $c=$this->request->getPost('lokasi');
        $d=$this->request->getPost('wali');
        $data = array(
                "nama_kelas"=>$a,
                "id_jurusan"=>$b,
                "lokasi_kelas"=>$c,
                "walikelas"=>$d
                );
        $Joyce= new M_belajar;
        $Joyce->input('kelas',$data);
        return redirect()->to('home/kelas');
    }
    public function input_kelas()
    {
        $Joyce= new M_belajar;
        $where=('id_kelas');
        $wendy['takdirestui']=$Joyce->tampil('kelas', $where);
        echo view('header');
        echo view('menu');
        echo view('inputkelas',$wendy);
        echo view('footer');
    }
    public function editkelas($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_kelas' => $id);
        $wendy['takdirestui']=$Joyce->getWhere('kelas',$wece);
        echo view('header');
        echo view('editkelas', $wendy);
        echo view('footer');
    }  
    public function simpankelas()
    {
        $a=$this->request->getpost('nama');
        $b=$this->request->getPost('idjurusan');
        $c=$this->request->getPost('lokasi');
        $d=$this->request->getPost('wali');
        $id=$this->request->getPost('id');
        $Joyce= new M_belajar;
        $wece= array('id_kelas' =>$id);
        $data = array(
                "nama_kelas"=>$a,
                "id_jurusan"=>$b,
                "lokasi_kelas"=>$c,
                "walikelas"=>$d
                );

        $Joyce->edit('kelas',$data,$wece);
        return redirect()->to('home/kelas');
    }
    public function jurusan()
    {
        $Joyce= new M_belajar;
        $where=('id_jurusan');
        $wendy['takdirestui']=$Joyce->tampil('jurusan',$where);
        echo view('header');
        echo view('menu');
        echo view('jurusan',$wendy);
        echo view('footer');
    }
    public function hapus_jurusan($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_jurusan' => $id);
        $wendy['takdirestui']=$Joyce->hapus('jurusan',$wece);
        return redirect()->to('home/jurusan');
    }
    public function simpan_jurusan()
    {
        $a=$this->request->getpost('nama');
        $b=$this->request->getPost('kode');
        $data = array(
                "nama_jurusan"=>$a,
                "kode_jurusan"=>$b,
                );
        $Joyce= new M_belajar;
        $Joyce->input('jurusan',$data);
        return redirect()->to('home/jurusan');
    }
    public function input_jurusan()
    {
        $Joyce= new M_belajar;
        $where=('id_jurusan');
        $wendy['takdirestui']=$Joyce->tampil('jurusan', $where);
        echo view('header');
        echo view('menu');
        echo view('inputjurusan',$wendy);
        echo view('footer');
    }
    public function editjurusan($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_jurusan' => $id);
        $wendy['takdirestui']=$Joyce->getWhere('jurusan',$wece);
        echo view('header');
        echo view('editjurusan', $wendy);
        echo view('footer');
    }
    public function simpanjurusan()
    {
        $a=$this->request->getpost('nama');
        $b=$this->request->getPost('kode');
        $id=$this->request->getPost('id');
        $Joyce= new M_belajar;
        $wece= array('id_jurusan' =>$id);
        $data = array(
                "nama_jurusan"=>$a,
                "kode_jurusan"=>$b,
                );

        $Joyce->edit('jurusan',$data,$wece);
        return redirect()->to('home/jurusan');
    }
    public function buku()
    {
        $Joyce= new M_belajar;
        $where=('id_buku');
        $wendy['takdirestui']=$Joyce->tampil('buku',$where);
        echo view('header');
        echo view('menu');
        echo view('buku',$wendy);
        echo view('footer');
    }
    public function hapus_buku($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_buku' => $id);
        $wendy['takdirestui']=$Joyce->hapus('buku',$wece);
        return redirect()->to('home/buku');
    }
    public function simpan_buku()
    {
        $a=$this->request->getpost('judul');
        $b=$this->request->getPost('kode');
        $c=$this->request->getPost('terbit');
        $d=$this->request->getPost('rak');
        $data = array(
                "judul_buku"=>$a,
                "kode_buku"=>$b,
                "tahun_terbit"=>$c,
                "kode_rak"=>$d,
                );
        $Joyce= new M_belajar;
        $Joyce->input('buku',$data);
        return redirect()->to('home/buku');
    }
    public function input_buku()
    {
        $Joyce= new M_belajar;
        $where=('id_buku');
        $wendy['takdirestui']=$Joyce->tampil('buku', $where);
        echo view('header');
        echo view('menu');
        echo view('inputbuku',$wendy);
        echo view('footer');
    }
    public function editbuku($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_buku' => $id);
        $wendy['takdirestui']=$Joyce->getWhere('buku',$wece);
        echo view('header');
        echo view('editbuku', $wendy);
        echo view('footer');
    }
    public function simpanbuku()
    {
        $a=$this->request->getpost('judul');
        $b=$this->request->getPost('kode');
        $c=$this->request->getPost('terbit');
        $d=$this->request->getPost('rak');
        $id=$this->request->getPost('id');
        $Joyce= new M_belajar;
        $wece= array('id_buku' =>$id);
        $data = array(
                "judul_buku"=>$a,
                "kode_buku"=>$b,
                "tahun_terbit"=>$c,
                "kode_rak"=>$d,
                );

        $Joyce->edit('buku',$data,$wece);
        return redirect()->to('home/buku');
    }
    public function peminjaman()
    {
        $Joyce= new M_belajar;
        $where=('id_peminjam');
        $wendy['takdirestui']=$Joyce->join4('peminjaman','siswa','buku','petugas',
                                'peminjaman.id_siswa=siswa.id_siswa',
                                'peminjaman.id_buku=buku.id_buku',
                                'peminjaman.id_petugas=petugas.id_petugas');
        echo view('header');
        echo view('menu');
        echo view('peminjaman',$wendy);
        echo view('footer');
    }
    public function hapus_peminjaman($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_peminjam' => $id);
        $wendy['takdirestui']=$Joyce->hapus('peminjaman',$wece);
        return redirect()->to('home/peminjaman');
    }
    public function input_peminjaman()
    {
        $Joyce= new M_belajar;
        $where=('id_siswa');
        $wendy['siswa']=$Joyce->tampil('siswa',$where);
        $where=('id_buku');
        $wendy['buku']=$Joyce->tampil('buku',$where);
        $where=('id_petugas');
        $wendy['petugas']=$Joyce->tampil('petugas',$where);
        echo view('header');
        echo view('menu');
        echo view('inputpeminjaman',$wendy);
        echo view('footer');
    }
    public function savep ()
    {
        $a=$this->request->getPost('peminjaman');
        $b=$this->request->getPost('pengembalian');
        $c=$this->request->getPost('denda');
        $d=$this->request->getPost('jumlah');
        $data = array(
            "tanggal_peminjaman"=>$a,
            "tanggal_pengembalian"=>$b,
            "denda"=>$c,
            "jumlah"=>$d,
        );

        $joyce= new M_belajar;
        $joyce->input('peminjaman',$data);
        return redirect()->to('home/peminjaman');
    }
    public function simpan_peminjaman()
    {
        $a=$this->request->getpost('siswa');
        $b=$this->request->getPost('buku');
        $c=$this->request->getPost('petugas');
        $d=$this->request->getPost('peminjaman');
        $e=$this->request->getPost('pengembalian');
        $f=$this->request->getPost('denda');
        $g=$this->request->getPost('jumlah');

        $data = array(
                "id_siswa"=>$a,
                "id_buku"=>$b,
                "id_petugas"=>$c,
                "tanggal_peminjaman"=>$d,
                "tanggal_pengembalian"=>$e,
                "denda"=>$f,
                "jumlah"=>$g
                );
       
        $Joyce= new M_belajar;
        $Joyce->input('peminjaman',$data);
        return redirect()->to('home/peminjaman');
    }
    public function editpeminjaman($id)
    {
        $Joyce= new M_belajar;
        $wece= array('id_peminjam' => $id);
        $wendy['takdirestui']=$Joyce->joinw4('peminjaman','siswa','buku','petugas',
                                'peminjaman.id_siswa=siswa.id_siswa',
                                'peminjaman.id_buku=buku.id_buku',
                                'peminjaman.id_petugas=petugas.id_petugas',$wece);

        echo view('header');
        echo view('editpeminjaman', $wendy);
        echo view('footer');
    }
    public function simpanpeminjaman()
    {
        $a=$this->request->getpost('siswa');
        $b=$this->request->getPost('buku');
        $c=$this->request->getPost('petugas');
        $d=$this->request->getPost('peminjaman');
        $e=$this->request->getPost('pengembalian');
        $f=$this->request->getPost('denda');
        $g=$this->request->getPost('jumlah');
        $id=$this->request->getPost('id');
        $Joyce= new M_belajar;
        $wece= array('id_peminjam' =>$id);
        $data = array(
                "nama_siswa"=>$a,
                "judul_buku"=>$b,
                "nama_petugas"=>$c,
                "tanggal_peminjaman"=>$d,
                "tanggal_pengembalian"=>$e,
                "denda"=>$f,
                "jumlah"=>$g
                );

        $Joyce->edit('peminjaman',$data, $wece);
        return redirect()->to('home/peminjaman');
    }
    public function lp()
    {
            echo view('menu');
            echo view('header');
            echo view('laporanpeminjaman');
            echo view('footer');
        }
    public function tcpdfpeminjaman()
    {
            echo view('menu');
            echo view('header');
            echo view('tcpdfpeminjaman');
            echo view('footer');
        }
    public function tablepeminjaman()
    {
            $Joyce = new M_belajar;
            $a=$this->request->getPost('ta');
            $b=$this->request->getPost('tar');
            $wendy['takdirestui']=$Joyce->filter('peminjaman', 'buku', 'peminjaman.id_buku=buku.id_buku', 'stok >=','stok <=', "$a", "$b");
            echo view ('tablepeminjaman',$wendy);
            }
    public function excellaporan_peminjaman()
    {
        $Joyce = new M_belajar;
        $a=$this->request->getPost('ta');
        $b=$this->request->getPost('tar');
        $wendy['takdirestui']=$Joyce->filter('peminjaman', 'buku', 'peminjaman.id_buku=buku.id_buku', 'stok >=','stok <=', "$a", "$b");
        echo view ('excellaporan_peminjaman',$wendy);
    }
    public function downloadPDFpeminjaman()
{
    $Joyce = new M_belajar;
    $a = $this->request->getPost('awal');
    $b = $this->request->getPost('akhir');
    $where=('id_peminjam');
    // Fetch data for the view
    $wendy = $Joyce->filter('peminjaman', 'buku', 'peminjaman.id_buku=buku.id_buku', 'tanggal_peminjaman >=', 'tanggal_peminjaman <=', $a, $b, $where);
    // Buat instance dari TCPDF
    $pdf = new TCPDF();
    // Setel metadata dasar PDF
    $pdf->SetCreator('TCPDF');
    $pdf->SetAuthor('Nama Anda');
    $pdf->SetTitle('Laporan Peminjaman');
    $pdf->SetSubject('Laporan PDF');
    $pdf->SetKeywords('TCPDF, PDF, laporan, Peminjaman');
    // Atur halaman PDF
    $pdf->AddPage();
    // Load view and capture output
    $html = view('tcpdfpeminjaman', ['takdirestui' => $wendy]);
    // Render HTML ke PDF
    $pdf->writeHTML($html, true, false, true, false, '');
    // Output file PDF
    $pdf->Output('laporanpeminjaman.pdf', 'D'); // 'D' untuk download, 'I' untuk menampilkan di browser
}
}