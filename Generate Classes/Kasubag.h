#ifndef Kasubag_h
#define Kasubag_h

class Surat;

class Kasubag {

 public:

    virtual void penomoranSurat();

 public:
    String id_kasubag;

 public:

    /**
     * @element-type Surat
     */
    Surat *mySurat;
};

#endif // Kasubag_h
