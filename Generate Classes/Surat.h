#ifndef Surat_h
#define Surat_h

class Pegawai;
class Kasubag;

class Surat {

 public:

    virtual void buatSurat();

 public:
    Integer id_surat;
    Integer no_surat;
    String jenis_surat;

 public:

    /**
     * @element-type Pegawai
     */
    Pegawai *myPegawai;

    /**
     * @element-type Kasubag
     */
    Kasubag *myKasubag;
};

#endif // Surat_h
