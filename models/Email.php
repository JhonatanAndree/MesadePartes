<?php
    require('class.phpmailer.php');
    include("class.smtp.php");

    require_once("../config/conexion.php");
    require_once("../Models/Usuario.php");

    class Email extends PHPMailer{
        
        public function recuperar($usu_correo){
            $usuario = new Usuario();
            $datos = $usuario->get_correo_usuario($usu_correo);
            foreach ($datos as $row) {
                $nom = $row["usu_nom"].' '.$row["usu_ape"];
                $pass = $row["usu_pass"];
            }

            $this->IsSMTP();
            $this->Host = 'smtp.stackmail.com';
            $this->Port = 465;
            $this->SMTPAuth = true;
            $this->Username = $this->tu_email = "contacto@mgp.edu.pe";
            $this->Password = $this->tu_password = "Ys3a65115";
            $this->SMTPSecure = 'tsl';
            $this->From = $this->tu_email="contacto@mgp.edu.pe";
            $this->CharSet='UTF8';
            $this->addAddress($usu_correo);
            $this->WordWrap = 50;
            $this->IsHTML(true);
            $this->Subject = "Recuperar Contraseña";
                $cuerpo = file_get_contents('../public/recuperar.html');
                $cuerpo = str_replace('lblnomx',$nom,$cuerpo);
                $cuerpo = str_replace('lblpassx',$pass,$cuerpo);
            $this->Body = $cuerpo;
            $this->IsHTML(true);
            return $this->Send();
        }

        public function nuevo($usu_correo){
            $usuario = new Usuario();
            $datos = $usuario->get_correo_usuario($usu_correo);
            foreach ($datos as $row) {
                $nom = $row["usu_nom"].''.$row["usu_ape"];
                $pass = $row["usu_pass"];
            }

            $this->IsSMTP();
            $this->Host = 'smtp.stackmail.com';
            $this->Port = 465;
            $this->SMTPAuth = true;
            $this->Username = $this->tu_email = "contacto@mgp.edu.pe";
            $this->Password = $this->tu_password = "Ys3a65115";
            $this->SMTPSecure = 'tls';
            $this->From = $this->tu_email="contacto@mgp.edu.pe";
            $this->FromName = $this->tu_nombre="Registro Correcto";
            $this->CharSet='UTF8';
            $this->addAddress($usu_correo);
            $this->WordWrap = 50;
            $this->IsHTML(true);
            $this->Subject = "Registro Correcto";
                $cuerpo = file_get_contents('../public/nuevo.html');
                $cuerpo = str_replace('lblnomx',$nom,$cuerpo);
            $this->Body = $cuerpo;
            $this->IsHTML(true);
            $this->AltBody = strip_tags("Registro Correcto");
            return $this->Send();
        }

        public function solicitud($part_id,$usu_nom,$usu_ape){
            $this->IsSMTP();
            $this->Host = 'smtp.stackmail.com';
            $this->Port = 465;
            $this->SMTPAuth = true;
            $this->Username = $this->tu_email = "contacto@mgp.edu.pe";
            $this->Password = $this->tu_password = "Ys3a65115";
            $this->SMTPSecure = 'tls';
            $this->From = $this->tu_email="contacto@mgp.edu.pe";
            $this->FromName = $this->tu_nombre="Nueva Solicitud";
            $this->CharSet='UTF8';
            $this->addAddress("contacto@mgp.edu.pe");
            $this->WordWrap = 50;
            $this->IsHTML(true);
            $this->Subject = "Nueva Solicitud";
                $cuerpo = file_get_contents('../public/solicitud.html');
                $cuerpo = str_replace('lblnomx',$usu_nom.''.$usu_ape,$cuerpo);
                $cuerpo = str_replace('lblnumx',$part_id,$cuerpo);
            $this->Body = $cuerpo;
            $this->IsHTML(true);
            $this->AltBody = strip_tags("Nueva Solicitud");
            return $this->Send();
        }

    }
?>