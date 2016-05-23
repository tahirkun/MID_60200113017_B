#ifndef Mahasiswa_h
#define Mahasiswa_h

class Pegawai;

class Mahasiswa {

 public:

    virtual void requestSurat();

 public:
    String nim;

 public:

    /**
     * @element-type Pegawai
     */
    Pegawai *myPegawai;
};

#endif // Mahasiswa_h
