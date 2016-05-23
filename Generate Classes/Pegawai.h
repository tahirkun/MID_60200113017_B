#ifndef Pegawai_h
#define Pegawai_h

#include "date.h"

class Mahasiswa;
class Surat;

class Pegawai {

 public:

    virtual void cetakSurat();

 public:
    String id_pegawai;
    date waktu;

 public:

    /**
     * @element-type Mahasiswa
     */
    Mahasiswa *myMahasiswa;

    /**
     * @element-type Surat
     */
    Surat *mySurat;
};

#endif // Pegawai_h
