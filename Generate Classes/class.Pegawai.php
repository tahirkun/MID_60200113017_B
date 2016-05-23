<?php

error_reporting(E_ALL);

/**
 * untitledModel - class.Pegawai.php
 *
 * $Id$
 *
 * This file is part of untitledModel.
 *
 * Automatically generated on 23.05.2016, 10:47:12 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Mahasiswa
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Mahasiswa.php');

/**
 * include Surat
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Surat.php');

/* user defined includes */
// section -64--88-43-26--3e3fb5eb:154db5939e8:-8000:0000000000000987-includes begin
// section -64--88-43-26--3e3fb5eb:154db5939e8:-8000:0000000000000987-includes end

/* user defined constants */
// section -64--88-43-26--3e3fb5eb:154db5939e8:-8000:0000000000000987-constants begin
// section -64--88-43-26--3e3fb5eb:154db5939e8:-8000:0000000000000987-constants end

/**
 * Short description of class Pegawai
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Pegawai
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id_pegawai
     *
     * @access public
     * @var String
     */
    public $id_pegawai = null;

    /**
     * Short description of attribute waktu
     *
     * @access public
     * @var date
     */
    public $waktu = null;

    // --- OPERATIONS ---

    /**
     * Short description of method cetakSurat
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function cetakSurat()
    {
        // section -64--88-43-26--3e3fb5eb:154db5939e8:-8000:0000000000000991 begin
        // section -64--88-43-26--3e3fb5eb:154db5939e8:-8000:0000000000000991 end
    }

} /* end of class Pegawai */

?>