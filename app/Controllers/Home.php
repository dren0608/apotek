<?php

namespace App\Controllers;
use App\Models\M_apotek;

class Home extends BaseController
{
    public function index()
        {
            return view('login.php');
        }
        public function aksi_login ()
        {
           
            $a=$this->request->getpost('username');
            $b=$this->request->getpost('password');

            $Q = new M_apotek;
            $D = array(
                'username' => $a,
                'password' => md5($b),  

            );

            $cek= $Q->getWhere('user', $D);
    
            if ($cek != null) {
                session()->set('id',$cek->id_user); 
                session()->set('u',$cek->username); 
                session()->set('level',$cek->level); 

                return redirect()->to('home/dashboard');
            }else{
                return redirect()->to('home/index');
            }
        
        }
        public function logout()
        {
            session()->destroy();
            return redirect()->to('home');
        }
        public function dashboard()
        {
            if (session()->get('id')>0) {
            echo view('header');
            echo view('menu');
            echo view('dashboard');
            echo view('footer');
            }else{
                return redirect()->to('home/index');
            }
        }
        public function barang()
    {
        $Lol= new M_apotek;
        $where=('id_barang');
        $Kol['kita']=$Lol->tampil('barang', $where);
        echo view('header');
        echo view('menu');
        echo view('barang',$Kol);
        echo view('footer');
    }
    public function edit_barang($id)
    {
        $Lol= new M_apotek;
        $Pol=array('id_barang' => $id);
        $Kol['kita']=$Lol->getWhere('barang',$where);
        echo view ('header');
        echo view ('menu');
        echo view ('edit_barang',$Kol);
        echo view ('footer');
    }
    public function hapus_barang($id) 
        {
            $Lol= new M_apotek;
            $Pol= array('id_barang' => $id);
            $Kol['kita']= $Lol->hapus('barang',$Pol);
            return redirect()->to('Home/barang');
        }
    public function simpan_barang()
        {
            $a=$this->request->getpost('nb');
            $b=$this->request->getpost('kb');
            $c=$this->request->getpost('jenis');
            $d=$this->request->getpost('hrga');
            $e=$this->request->getpost('stk');
            $id=$this->request->getpost('idb');
            $Lol= new M_apotek;
            $Pol= array('id_barang' => $id);
            $data= array(
                    "nama_barang"=>$a,
                    "kode_barang"=>$b,
                    "jenis_barang"=>$c,
                    "harga_barang"=>$d,
                    "stok"=>$e,
                    );

            $Lol->edit('barang',$data,$where);
            return redirect()->to('home/barang');
        }
        public function tbr()
        {
            $Lol= new M_apotek;
            $Kol['kita']= $Lol->tampil('barang');
            echo view('header');
            echo view('menu');
            echo view('tb',$Kol);
            echo view('footer');
        }
        public function simpan_tbb()
        {
            $a=$this->request->getpost('nb');
            $b=$this->request->getpost('kb');
            $c=$this->request->getpost('jenis');
            $d=$this->request->getpost('hrga');
            $e=$this->request->getpost('stk');
            $id=$this->request->getpost('idmbb');
            $Lol= new M_apotek;
            $Pol= array('id_barang' => $id);
            $data= array(
                    "nama_barang"=>$a,
                    "kode_barang"=>$b,
                    "jenis_barang"=>$c,
                    "harga_barang"=>$d,
                    "stok"=>$e,
            );
            $Lol=new M_apotek;
            $Lol->input('barang',$data);
            return redirect()->to('home/barang');
        }
        public function barang_masuk()
        {
        $Lol= new M_apotek;
        $Kol['kita']=$Lol->join('barang_masuk', 'barang', 'barang_masuk.id_barang = barang.id_barang');
        echo view('header');
        echo view('menu');
        echo view('barang_masuk',$Kol);
        echo view('footer');
        }
        public function hapus_bm($id) 
        {
            $Lol= new M_apotek;
            $Pol= array('id_bm' => $id);
            $Kol['kita']= $Lol->hapus('barang_masuk',$Pol);
            return redirect()->to('Home/barang_masuk');
        }
        public function edit_bm($id)
        {
        $Lol= new M_apotek;
        $Pol=array('id_bm' => $id);
        $Kol['kita']=$Lol->getWhere('barang_masuk',$where);
        echo view ('header');
        echo view ('menu');
        echo view ('edit_bm',$Kol);
        echo view ('footer');
        }
        public function simpan_bm()
        {
            $a=$this->request->getpost('id');
            $b=$this->request->getpost('jumlah');
            $c=$this->request->getpost('tgms');
            $id=$this->request->getpost('idbm');
            $Lol= new M_apotek;
            $Pol= array('id_bm' => $id);
            $data= array(
                    "id_barang"=>$a,
                    "jumlah"=>$b,
                    "tanggal_masuk"=>$c,
                    );

            $Lol->edit('barang_masuk',$data,$Pol);
            return redirect()->to('home/barang_masuk');
        } 
        public function tbm()
        {
            $Lol= new M_apotek;
            $Kol['kita']= $Lol->tampil('barang');
            echo view('header');
            echo view('menu');
            echo view('tbm',$Kol);
            echo view('footer');
        }
        public function simpan_tbm()
        {
            $a=$this->request->getPost('id_brg');
            $b=$this->request->getPost('jumlah');
            $c=$this->request->getPost('tanggal');
            $data= array(
                    "id_barang"=>$a,
                    "jumlah"=>$b,
                    "tanggal"=>$c
            );
            $Lol=new M_apotek;
            $Lol->input('barang_masuk',$data);
            return redirect()->to('home/barang_masuk');
        }
        public function barang_keluar()
        {
        $Lol= new M_apotek;
        $Kol['kita']=$Lol->join('barang_keluar', 'barang', 'barang_keluar.id_barang = barang.id_barang');
        echo view('header');
        echo view('menu');
        echo view('barang_keluar',$Kol);
        echo view('footer');
        }
        public function hapus_bk($id) 
        {
            $Lol= new M_apotek;
            $Pol= array('id_bk' => $id);
            $Kol['kita']= $Lol->hapus('barang_keluar',$Pol);
            return redirect()->to('Home/barang_keluar');
        }
        public function edit_bk($id)
        {
        $Lol= new M_apotek;
        $Pol=array('id_bk' => $id);
        $Kol['kita']=$Lol->getWhere('barang_keluar',$where);
        echo view ('header');
        echo view ('menu');
        echo view ('edit_bk',$Kol);
        echo view ('footer');
        }
        public function simpan_bk()
        {
            $a=$this->request->getpost('id');
            $b=$this->request->getpost('jumlah');
            $c=$this->request->getpost('tgkl');
            $id=$this->request->getpost('idbk');
            $Lol= new M_apotek;
            $Pol= array('id_bk' => $id);
            $data= array(
                    "id_barang"=>$a,
                    "jumlah"=>$b,
                    "tanggal_keluar"=>$c,
                    );

            $Lol->edit('barang_keluar',$data,$Pol);
            return redirect()->to('home/barang_keluar');
        } 
        public function tbk()
        {
            $Lol= new M_apotek;
            $Kol['kita']= $Lol->tampil('barang');
            echo view('header');
            echo view('menu');
            echo view('tbk',$Kol);
            echo view('footer');
        }
        public function simpan_tbk()
        {
            $a=$this->request->getPost('id_brg');
            $b=$this->request->getPost('jumlah');
            $c=$this->request->getPost('tanggal');
            $data= array(
                    "id_barang"=>$a,
                    "jumlah"=>$b,
                    "tanggal"=>$c
            );
            $Lol=new M_apotek;
            $Lol->input('barang_keluar',$data);
            return redirect()->to('home/barang_keluar');
        }
        public function member()
        {
        $Lol= new M_apotek;
        $where=('id_member');
        $Kol['kita']=$Lol->tampil('member', $where);
        echo view('header');
        echo view('menu');
        echo view('member',$Kol);
        echo view('footer');
        }
        public function edit_member($id)
        {
        $Lol= new M_apotek;
        $Pol=array('id_member' => $id);
        $Kol['kita']=$Lol->getWhere('member',$where);
        echo view ('header');
        echo view ('menu');
        echo view ('edit_member',$Kol);
        echo view ('footer');
        }
        public function hapus_member($id) 
        {
            $Lol= new M_apotek;
            $Pol= array('id_member' => $id);
            $Kol['kita']= $Lol->hapus('member',$Pol);
            return redirect()->to('Home/member');
        }
        public function simpan_member()
        {
            $a=$this->request->getpost('usn');
            $b=$this->request->getpost('nomor');
            $c=$this->request->getpost('poin');
            $id=$this->request->getpost('idm');
            $Lol= new M_apotek;
            $Pol= array('id_member' => $id);
            $data= array(
                    "id_user"=>$a,
                    "no_hp"=>$b,
                    "poin_member"=>$c,
                    );

            $Lol->edit('member',$data,$where);
            return redirect()->to('home/member');
        }
        public function tmember()
        {
            $Lol= new M_apotek;
            $Kol['kita']= $Lol->tampil('member');
            echo view('header');
            echo view('menu');
            echo view('tmember',$Kol);
            echo view('footer');
        }
        public function simpan_tmember()
        {
            $a=$this->request->getpost('usn');
            $b=$this->request->getpost('nomor');
            $c=$this->request->getpost('poin');
            $data= array(
                    "id_user"=>$a,
                    "no_hp"=>$b,
                    "poin_member"=>$c,
            );
            $Lol=new M_apotek;
            $Lol->input('member',$data);
            return redirect()->to('home/member');
        }
         public function nota()
        {
        $Lol= new M_apotek;
        $Kol['kita']=$Lol->join('nota', 'user', 'nota.id_user = user.id_user');
        echo view('header');
        echo view('menu');
        echo view('nota',$Kol);
        echo view('footer');
        }
        public function edit_nota($id)
        {
            $Lol= new M_apotek;
            $Pol=array('id_nota' => $id);
            $Kol['kita']=$Lol->getWhere('nota',$where);
            echo view ('header');
            echo view ('menu');
            echo view ('edit_nota',$Kol);
            echo view ('footer');
        }
        public function hapus_nota($id) 
        {
                $Lol= new M_apotek;
                $Pol= array('id_nota' => $id);
                $Kol['kita']= $Lol->hapus('nota',$Pol);
                return redirect()->to('Home/nota');
        }
        public function simpan_nota()
        {
            $a=$this->request->getpost('usn');
            $b=$this->request->getpost('tgl');
            $c=$this->request->getpost('jenis');
            $d=$this->request->getpost('bayar');
            $id=$this->request->getpost('idn');
            $Lol= new M_apotek;
            $Pol= array('id_nota' => $id);
            $data= array(
                    "id_user"=>$a,
                    "tanggal"=>$b,
                    "metode_pembayaran"=>$c,
                    "total_bayar"=>$d,

                    );

            $Lol->edit('nota',$data,$where);
            return redirect()->to('home/nota');
        }
        public function tnota()
        {
            $Lol=new M_apotek;
            $Kol['kita']=$Lol->tampil('nota');
            echo view('header');
            echo view('menu');
            echo view('tnota',$Kol);
            echo view('footer');
        }
        public function simpan_tnota()
        {
            $a=$this->request->getpost('usn');
            $b=$this->request->getpost('tgl');
            $c=$this->request->getpost('jenis');
            $d=$this->request->getpost('hrga');
             $id=$this->request->getpost('idn');
            $Lol= new M_apotek;
            $Pol= array('id_nota' => $id);
            $data= array(
                    "id_user"=>$a,
                    "tanggal"=>$b,
                    "metode_pembayaran"=>$c,
                    "total_bayar"=>$d,
            );
            $Lol=new M_apotek;
            $Lol->input('nota',$data);
            return redirect()->to('home/nota');
        }
        public function karyawan()
        {
            $Lol= new M_apotek;
            $where=('id_karyawan');
            $Kol['kita']=$Lol->tampil('karyawan', $where);
            echo view('header');
            echo view('menu');
            echo view('karyawan',$Kol);
            echo view('footer');
        }
        public function edit_karyawan($id)
        {
            $Lol= new M_apotek;
            $Pol=array('id_karyawan' => $id);
            $Kol['kita']=$Lol->getWhere('karyawan',$where);
            echo view ('header');
            echo view ('menu');
            echo view ('edit_karyawan',$Kol);
            echo view ('footer');
        }
        public function hapus_karyawan($id) 
        {
                $Lol= new M_apotek;
                $Pol= array('id_karyawan' => $id);
                $Kol['kita']= $Lol->hapus('karyawan',$Pol);
                return redirect()->to('Home/karyawan');
        }
        public function simpan_karyawan()
        {
            $a=$this->request->getPost('nama');
            $b=$this->request->getPost('nik');
            $e=$this->request->getPost('nomor');
            $f=$this->request->getPost('jk');
            $g=$this->request->getPost('tempat');
            $h=$this->request->getPost('tgl');
            $i=$this->request->getPost('almt');
                $id=$this->request->getpost('idk');
                $Lol= new M_apotek;
                $Pol= array('id_karyawan' => $id);
                $data= array(
                    "nama"=>$a,
                    "NIK"=>$b,
                    "no_hp"=>$e,
                    "jenis_kelamin"=>$f,
                    "tempat_lahir"=>$g,
                    "tanggal_lahir"=>$h,
                    "alamat"=>$i
                        );

            $Lol->edit('karyawan',$data,$where);
            return redirect()->to('home/karyawan');
        }
        public function tkaryawan()
        {
            $Lol= new M_apotek;
            $Kol['kita']= $Lol->tampil('karyawan');
            echo view('header');
            echo view('menu');
            echo view('tkry',$Kol);
            echo view('footer');
            }
        public function simpan_tkry()
        {
            $a=$this->request->getPost('nama');
            $b=$this->request->getPost('nik');
            $e=$this->request->getPost('nomor');
            $f=$this->request->getPost('jk');
            $g=$this->request->getPost('tempat');
            $h=$this->request->getPost('tgl');
            $i=$this->request->getPost('almt');
            $data= array(
                    "nama"=>$a,
                    "NIK"=>$b,
                    "no_hp"=>$e,
                    "jenis_kelamin"=>$f,
                    "tempat_lahir"=>$g,
                    "tanggal_lahir"=>$h,
                    "alamat"=>$i
            );
            $Lol=new M_apotek;
            $Lol->input('karyawan',$data);
            return redirect()->to('home/karyawan');
        } 
         public function transaksi()
        {
        $Lol= new M_apotek;
        $where=('id_transaksi');
        $Kol['kita']=$Lol->tampil('transaksi', $where);
        echo view('header');
        echo view('menu');
        echo view('transaksi',$Kol);
        echo view('footer');
        }
        public function edit_transaksi($id)
        {
        $Lol= new M_apotek;
        $Pol=array('id_transaksi' => $id);
        $Kol['kita']=$Lol->getWhere('transaksi',$where);
        echo view ('header');
        echo view ('menu');
        echo view ('edit_transaksi',$Kol);
        echo view ('footer');
        }
        public function hapus_transaksi($id) 
        {
            $Lol= new M_apotek;
            $Pol= array('id_transaksi' => $id);
            $Kol['kita']= $Lol->hapus('transaksi',$Pol);
            return redirect()->to('Home/transaksi');
        }
        public function simpan_transaksi()
        {
            $a=$this->request->getpost('nnn');
            $b=$this->request->getpost('tgl');
            $c=$this->request->getpost('qty');
            $d=$this->request->getpost('jenis');
            $e=$this->request->getpost('status');
            $id=$this->request->getpost('idtr');
            $Lol= new M_apotek;
            $Pol= array('id_transaksi' => $id);
            $data= array(
                    "id_nota"=>$a,
                    "tanggal_transaksi"=>$b,
                    "jumlah_barang"=>$c,
                    "metode_pembayaran"=>$d,
                    "status"=>$e,
                    );

            $Lol->edit('transaksi',$data,$where);
            return redirect()->to('home/transaksi');
        }
        public function tbtrk()
        {
            $Lol= new M_apotek;
            $Kol['kita']= $Lol->tampil('transaksi');
            echo view('header');
            echo view('menu');
            echo view('tbtrk',$Kol);
            echo view('footer');
        }
        public function simpan_tbtrk()
        {
            $a=$this->request->getpost('idn');
            $b=$this->request->getpost('tgl');
            $c=$this->request->getpost('qty');
            $d=$this->request->getpost('jenis');
            $e=$this->request->getpost('status');
            $id=$this->request->getpost('idt');
            $Lol= new M_apotek;
            $Pol= array('id_transaksi' => $id);
            $data= array(
                    "id_nota"=>$a,
                    "tanggal_transaksi"=>$b,
                    "jumlah_barang"=>$c,
                    "metode_pembayaran"=>$d,
                    "status"=>$e,
            );
            $Lol=new M_apotek;
            $Lol->input('transaksi',$data);
            return redirect()->to('home/transaksi');
        }
    public function lrg()
    {
        $Lol= new M_apotek;
        $where=('id_barang');
        $Kol['kita']=$Lol->tampil('barang', $where);
        echo view('header');
        echo view('menu');
        echo view('list_barang',$Kol);
        echo view('footer');
    }
    
    public function inputlist()
    {
        $Lol= new M_apotek;
        $Pol=array('id_barang' => $id);
        $Kol['kita']=$Lol->getWhere('barang',$where);
        echo view ('header');
        echo view ('menu');
        echo view ('input_list',$Kol);
        echo view ('footer');
    }
    public function input_list()
        {
            $a=$this->request->getPost('nb');
            $b=$this->request->getPost('kb');
            $c=$this->request->getPost('jenis');
            $d=$this->request->getPost('hrga');
            $e=$this->request->getPost('qty');
            $data= array(
                    "nama_barang"=>$a,
                    "kode_barang"=>$b,
                    "jenis_barang"=>$c,
                    "harga_barang"=>$d,
                    "quantity"=>$e,
            );
            $Lol=new M_apotek;
            $Lol->input('keranjang',$data);
            return redirect()->to('home/keranjang');
        }
    public function keranjang()
    {
        $Lol= new M_apotek;
        $where=('id_barang');
        $Kol['kita']=$Lol->tampil('keranjang', $where);
        echo view('header');
        echo view('menu');
        echo view('keranjang',$Kol);
        echo view('footer');
    } 

    }
