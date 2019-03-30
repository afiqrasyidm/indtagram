<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tambah_User_Gambar_Komentar extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'user_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'email' => array(
                                'type' => 'TEXT',
                                'constraint' => '100'
                        ),
                        'password' => array(
                                'type' => 'TEXT',
                                'constraint' => '100'
                        )
                ));
                $this->dbforge->add_key('user_id', TRUE);
                $this->dbforge->create_table('users');



                        $this->dbforge->add_field(array(
                                'gambar_id' => array(
                                        'type' => 'INT',
                                        'constraint' => 5,
                                        'unsigned' => TRUE,
                                        'auto_increment' => TRUE
                                ),
                                'url' => array(
                                        'type' => 'TEXT',
                                        'constraint' => '100'
                                )
                        ));
                        $this->dbforge->add_key('gambar_id', TRUE);
                        $this->dbforge->create_table('gambar');

                        $this->dbforge->add_field(array(
                                'komentar_id' => array(
                                        'type' => 'INT',
                                        'constraint' => 5,
                                        'unsigned' => TRUE,
                                        'auto_increment' => TRUE
                                ),
                                'user_id' => array(
                                        'type' => 'INT',
                                        'constraint' => 5,
                                        'unsigned' => TRUE
                                ),
                                'gambar_id' => array(
                                        'type' => 'INT',
                                        'constraint' => 5,
                                        'unsigned' => TRUE
                                ),
                                'komentar' => array(
                                        'type' => 'TEXT',
                                        'constraint' => '100'
                                ),

                        ));
                        $this->dbforge->add_key('komentar_id', TRUE);
                        $this->dbforge->create_table('komentar');

        }

        public function down()
        {
                $this->dbforge->drop_table('users');
                $this->dbforge->drop_table('gambar');
                $this->dbforge->drop_table('komentar');
        }
}
