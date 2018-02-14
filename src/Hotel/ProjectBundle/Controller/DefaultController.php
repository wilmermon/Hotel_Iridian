<?php

namespace Hotel\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hotel\ProjectBundle\Entity\ChhReserva;
use Hotel\ProjectBundle\Entity\ChhContacto;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Hotel\ProjectBundle\Form\ChhReservaType;
use Hotel\ProjectBundle\Form\ChhContactoType;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        //Recoger GET
        $var=$request->query->get("page");
        $end=$request->query->get("end");
        
        $repository = $this->getDoctrine()->getEntityManager();
        
        /*$home = $repository->getRepository('ProjectBundle:ChhHome')
               ->findAllOrderedByName();*/
            //Validacion de vacio
        if($var == "" || $var ==  null)
        {
            $var = "es";
            $end = 2;
        }
        $BD = $repository->getConnection();
        if($var != null || $var != "")
        {
            $query = "SELECT a.*, b.*, '".$var."' as page,'".$end."' as end
                  FROM chh_home as a, chh_congreso as b, chh_idiomas as c
                  WHERE a.congresoRelacion_id = b.id and a.activo = 1 and c.prefijoIdiomas = '".$var."' and c.id = a.idiomaRelacion_id ";
        }else {
            $query = "SELECT a.*, b.*, 'es' as page,'1' as end
                  FROM chh_home as a, chh_congreso as b, chh_idiomas as c
                  WHERE a.congresoRelacion_id = b.id and a.activo = 1 and c.prefijoIdiomas = 'es' and c.id = a.idiomaRelacion_id ";
        }
        
        $prepare = $BD->prepare($query);
        $param = array();
        $prepare->execute($param);
        $home = $prepare->fetchAll();
        
        /* **********************************************
           ******** Se hace una segunda consulta ********
           ********************************************** */
        $BD2 = $repository->getConnection();
        $query2 = "SELECT * FROM chh_testimonio ";
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        
        //return new Response('asdasd'.$productos->;
        return $this->render('ProjectBundle:sitioProductivo:index.html.twig',  array('home' => $home));
    }
    
    public function nosotrosAction(Request $request)
    {
        //Recoger GET
        $var=$request->query->get("page");
        $end=$request->query->get("end");
        
        //Validacion de vacio
        if($var == "" || $var ==  null)
        {
            $var = "es";
            $end = 1;
        }
        $repository = $this->getDoctrine()->getEntityManager();
        /* **********************************************
           ******** Se hace una segunda consulta ********
           ********************************************** */
        $BD2 = $repository->getConnection();
        if($var != null || $var != "")
        {
            $query2 = "SELECT a.*, '".$var."' as page, '".$end."' as end
                       FROM chh_nosotros_rotador as a, chh_idiomas as c
                       WHERE a.activo = 1 and c.prefijoIdiomas = '".$var."' and c.id = a.idiomaRelacion_id
                       ORDER BY orden ASC";
        }else{
            $query2 = "SELECT a.* 
                       FROM chh_nosotros_rotador as a, chh_idiomas as c
                       WHERE a.activo = 1 and c.prefijoIdiomas = 'es' and c.id = a.idiomaRelacion_id
                       ORDER BY orden ASC";
        }
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
        
        return $this->render('ProjectBundle:sitioProductivo:nosotros.html.twig', array('nosotros' => $home2));
    }
    
    public function serviciosAction(Request $request)
    {
        //Recoger GET
        $var=$request->query->get("page");
        $end=$request->query->get("end");
        
        //Validacion de vacio
        if($var == "" || $var ==  null)
        {
            $var = "es";
            $end = 3;
        }
        $repository = $this->getDoctrine()->getEntityManager();
        /* **********************************************
           ******** Se hace una segunda consulta ********
           ********************************************** */
        $BD2 = $repository->getConnection();
        if($var != null || $var != "")
        {
            $query2 = "SELECT a.*,'".$var."' as page, '".$end."' as end
                       FROM chh_servicios as a, chh_idiomas as c
                       WHERE c.prefijoIdiomas = '".$var."' and c.id = a.idiomaRelacion_id
                       ";
        }else{
            $query2 = "SELECT a.*,'".$var."' as page, '".$end."' as end
                       FROM chh_servicios as a, chh_idiomas as c
                       WHERE c.prefijoIdiomas = 'es' and c.id = a.idiomaRelacion_id
                       ";
        }
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
        
        return $this->render('ProjectBundle:sitioProductivo:servicios.html.twig', array('servicios' => $home2));
    }
    
    public function testimoniosAction()
    {
        /* **********************************************
           ******** Se hace una segunda consulta ********
           ********************************************** */
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        $query2 = "SELECT * FROM chh_testimonio ";
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        
        //return new Response('asdasd'.$productos->;
        return $this->render('ProjectBundle:sitioProductivo:comentarios.html.twig',  array('home' => $home2));
    }
    
    public function hderAction($page)
    {
        //Recoger GET
        //$var=$request->query->get("page");
        $var = $page;
        /* ************************************************
           ********** consulta de los valores *************
           ************************************************
        */
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        if($var != null || $var != "")
        {
            $query2 = "SELECT a.*, '".$var."' as page
                       FROM chh_menu a, chh_home b, chh_idiomas as c 
                       where a.activo = 1 and a.homeRelacion_id = b.id  and c.prefijoIdiomas = '".$var."' and c.id = a.idiomaRelacion_id
                       order by orden ASC";
        }else
        {
            $query2 = "SELECT a.*, '".$var."' as page
                       FROM chh_menu a, chh_home b, chh_idiomas as c 
                       where a.activo = 1 and a.homeRelacion_id = b.id  and c.prefijoIdiomas = 'es' and c.id = a.idiomaRelacion_id
                       order by orden ASC";
        }
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        
        //return new Response('asdasd'.$productos->;
        return $this->render('ProjectBundle:sitioProductivo:header.html.twig',  array('home' => $home2));
    }
    
    public function fterAction($page, $valorMenu)
    {
        /* ************************************************
           ********** consulta de los valores *************
           ************************************************
        */
        $var = $page;
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        #$query2 = "SELECT * FROM chh_footer where IdHome = (SELECT id FROM chh_home where activo = 1)";
        if($var != null || $var != "")
        {
            $query2 = "SELECT a.*, '".$valorMenu."' as valorMenu 
                       FROM chh_footer as a, chh_home b, chh_idiomas as c 
                       where a.homeRelacion_id = b.id  and c.prefijoIdiomas = '".$var."' and c.id = a.idiomaRelacion_id
                       ";
        }else
        {
            $query2 = "SELECT a.*, '".$valorMenu."' as valorMenu
                       FROM chh_footer as a, chh_home b, chh_idiomas as c 
                       where a.homeRelacion_id = b.id  and c.prefijoIdiomas = 'es' and c.id = a.idiomaRelacion_id
                       ";
        }
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        
        //return new Response('asdasd'.$productos->;
        return $this->render('ProjectBundle:sitioProductivo:footer.html.twig',  array('home' => $home2));
    
    }
    
    public function idiomaAction($valorMenu)
    {
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        
            $query2 = "SELECT *, '".$valorMenu."' as valorMenu
                       FROM chh_idiomas as a";
        
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        return $this->render('ProjectBundle:sitioProductivo:idiomas.html.twig',  array('home' => $home2));
    }
    
    public function contactoAction(Request $request)
    {
        //Recoger GET
        $var=$request->query->get("page");
        $end=$request->query->get("end");
        
        //Validacion de vacio
        if($var == "" || $var ==  null)
        {
            $var = "es";
            $end = 4;
        }
        /* ************************************************
           ********** consulta de los valores *************
           ************************************************
        */
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        
            $query2 = "SELECT a.*, '".$var."' as page, '".$end."' as end
                       FROM chh_contacto as a";
        
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        return $this->render('ProjectBundle:sitioProductivo:contacto.html.twig',  array('page' => $page, 'end' => $end));
    
    }
    
    public function congresoAction(Request $request)
    {
        //Seccion del filtro.
        $searchquery = $request->get('query');
        //Recoger GET
        $var=$request->query->get("page");
        $end=$request->query->get("end");
        
            //Validacion de vacio
            if($var == "" || $var ==  null)
            {
                $var = "es";
                $end = 2;
            }
        
        if(!empty($searchquery))
        {
            $finder = $this->container->get('fos_elastica.finder.app.chh_congreso');
            $home2 = $finder->find($searchquery);
        }else{
            /* ************************************************
               ********** consulta de los valores *************
               ************************************************
            */
            $repository = $this->getDoctrine()->getEntityManager();
            $BD2 = $repository->getConnection();
            if($var != null || $var != "")
            {
                $query2 = "SELECT a.id, a.NombreCongreso, a.DescripcionCongreso, a.FechaCongreso, a.UbicacionCongreso, c.NombrePais, a.LugarEncuentroCongreso, d.NombreTipoCongreso, a.MapaCongreso, a.MapAeropuerto
                           FROM chh_congreso as a, chh_pais_congreso as c, chh_tipo_congreso as d, chh_idiomas as e
                           WHERE a.paiscongresoRelacion_id = c.id and a.tipocongresoRelacion_id = d.id and e.prefijoIdiomas = '".$var."' and e.id = a.idiomaRelacion_id";
            }else{
                $query2 = "SELECT a.id, a.NombreCongreso, a.DescripcionCongreso, a.FechaCongreso, a.UbicacionCongreso, c.NombrePais, a.LugarEncuentroCongreso, d.NombreTipoCongreso,  a.MapaCongreso, a.MapAeropuerto
                           FROM chh_congreso as a, chh_pais_congreso as c, chh_tipo_congreso as d, chh_idiomas as e
                           WHERE a.paiscongresoRelacion_id = c.id and a.tipocongresoRelacion_id = d.id and e.prefijoIdiomas = 'es' and e.id = a.idiomaRelacion_id";
            }
            //'".$var."' as page, '".$end."' as end,
            $prepare2 = $BD2->prepare($query2);
            $param2 = array();
            $prepare2->execute($param2);
            $home2 = $prepare2->fetchAll();
        }

        return $this->render('ProjectBundle:sitioProductivo:congreso.html.twig',  array('home' => $home2
        , 'page' => $page, 'end' => $end ));
    
    }
    
    public function reservacontactoAction()
    {
        $reserva = new ChhReserva();
        $form = $this->createCreateForm($reserva);
        
        return $this->render('ProjectBundle:sitioProductivo:reservacontacto.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateForm(ChhReserva $reserva)
    {
        $form = $this->createForm(ChhReservaType::class, $reserva, array(
                'action' => $this->generateUrl('project_create'),
                'method' => 'POST'
            ));
            
        return $form;
    }
    
    public function createReservaAction(Request $request)
    {  
        $reserva = new ChhReserva();
        $form = $this->createCreateForm($reserva);
        $form->handleRequest($request);
        
        if($form->isValid())
        {
            //Declaracion de variables
            $CN_Subject = "";
            $CN_Destinatario = "";
            $CN_Remitente = "";
            $CN_Mensaje = "";
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($reserva);
            $em->flush();
            
            $repository = $this->getDoctrine()->getEntityManager();
            $BD2 = $repository->getConnection();
            
            /*************************************************************/
                //Consultamos los contactos habilitados desde la plataforma como destinatarios
                $query2 = "SELECT * FROM chh_correo_contacto ORDER BY id DESC limit 1";
                $prepare2 = $BD2->prepare($query2);
                $param2 = array();
                $prepare2->execute($param2);
                $home2 = $prepare2->fetchAll();
                foreach($home2 as $row)
                {
                    $CN_Destinatario = $row['CorreoContacto'];
                }
                
                $query2 = "SELECT * FROM chh_reserva ORDER BY id DESC limit 1";
                $prepare2 = $BD2->prepare($query2);
                $param2 = array();
                $prepare2->execute($param2);
                $home2 = $prepare2->fetchAll();
            /************************************************************/
                foreach($home2 as $row)
                {
                   //Esta línea puede ser cambiada por un formato HTML con twig y hacer más gráfica la solicitud.
                   $CN_Mensaje = "<html>
                		<head></head>
                		<body>
                 
                			<h3>".$row['EmpresaReserva']." quiere hacer una reserva</h3>
                			<hr/>
                			<p>Recibimos una solicitud de reserva por medio del formulario, y estos son sus datos:</p>
                			<hr/>
                			<P>Nombre Reserva: ".$row['NombreReserva']."</p>
                			<P>Correo: ".$row['CorreoReserva']."</p>
                			<P>Empresa: ".$row['EmpresaReserva']."</p>
                			<P>Número de habitaciones: ".$row['NumeroCuartosReserva']."</p>
                			<P>Mensaje: ".$row['MensajeReserva']."</p>
                			<p><b>Por favor ingrese a la administración del portal para ver más detalles.</b></p>
                			<hr/>
                			<p><i>Por favor no responda este correo, ya que es generado de manera automática.</i></p>
                		</body>
                	</html>"; 
                	
                	$CN_Remitente = $row['CorreoReserva'];
                }
                
                //Envio de correo Interno
                    $message = \Swift_Message::newInstance()
                    ->setSubject('Nueva Reserva Corporate Housing Hotels')
                    ->setFrom('cccwhm@gmail.com', '.: Corporate Housing Hotels :.')
                    ->setTo(array($CN_Destinatario))
                    ->setBody($CN_Mensaje,'text/html');
                   $this->get('mailer')->send($message);
                   
                //Envio de correo Confirmación
                    $CN_Mensaje = "<html>
                		<head></head>
                		<body>
                 
                			<h3>Recibimos tu solicitud de Reserva !</h3>
                			<hr/>
                			<p>Estaremos en contacto contigo en breve, vamos a verificar disponibilidad de habitaciones y te 
                			confirmaremos vía email la formalización de tu reserva.</p>
                			<hr/>
                			<p><i>Por favor no responda este correo, ya que es generado de manera automática.</i></p>
                		</body>
                	</html>";
                	
                    $message = \Swift_Message::newInstance()
                    ->setSubject('Recibimos tu solicitud :)')
                    ->setFrom('cccwhm@gmail.com', '.: Corporate Housing Hotels :.')
                    ->setTo(array($CN_Remitente))
                    ->setBody($CN_Mensaje,'text/html');
                   $this->get('mailer')->send($message);
                   $this->addFlash("success", "::. Gracias .:: por contactarnos, recibimos tu solicitud y en breve nuestro equipo revisará la disponibilidad para poder formalizar tu reserva.
                    Esperamos que disfrutes del congreso, si tienes dudas y/o preguntas, en el formulario de contacto podemos 
                    solucionarlas.");
            return $this->redirectToRoute('project_congreso');
        }
        
        return $this->render('ProjectBundle:sitioProductivo:congreso.html.twig', array('form' => $form->createView()));
    }
    
    

    
    public function contactformAction()
    {
        $contacto = new ChhContacto();
        $form = $this->createCreateFormContact($contacto);
        
        return $this->render('ProjectBundle:sitioProductivo:contact.html.twig', array('form' => $form->createView()));
    }
    
    private function createCreateFormContact(ChhContacto $contacto)
    {
        $form = $this->createForm(ChhContactoType::class, $contacto, array(
                'action' => $this->generateUrl('project_create_contacto'),
                'method' => 'POST'
            ));
            
        return $form;
    }
    
    public function createContactoAction(Request $request)
    {  
        $contacto = new ChhContacto();
        $form = $this->createCreateFormContact($contacto);
        $form->handleRequest($request);
        
        if($form->isValid())
        {
            //Declaracion de variables
            $CN_Subject = "";
            $CN_Destinatario = "";
            $CN_Remitente = "";
            $CN_Mensaje = "";
            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($contacto);
            $em->flush();
            
            $repository = $this->getDoctrine()->getEntityManager();
            $BD2 = $repository->getConnection();
            
            /*************************************************************/
                //Consultamos los contactos habilitados desde la plataforma como destinatarios
                $query2 = "SELECT * FROM chh_correo_contacto ORDER BY id DESC limit 1";
                $prepare2 = $BD2->prepare($query2);
                $param2 = array();
                $prepare2->execute($param2);
                $home2 = $prepare2->fetchAll();
                foreach($home2 as $row)
                {
                    $CN_Destinatario = $row['CorreoContacto'];
                }
                
                $query2 = "SELECT * FROM chh_contacto ORDER BY id DESC limit 1";
                $prepare2 = $BD2->prepare($query2);
                $param2 = array();
                $prepare2->execute($param2);
                $home2 = $prepare2->fetchAll();
            /************************************************************/
                foreach($home2 as $row)
                {
                   //Esta línea puede ser cambiada por un formato HTML con twig y hacer más gráfica la solicitud.
                   $CN_Mensaje = "<html>
                		<head></head>
                		<body>
                 
                			<h3>".$row['NombreContacto'].' '.$row['ApellidoContacto']." quiere ser contactado</h3>
                			<hr/>
                			<p>Recibimos una solicitud de contacto por medio del formulario de inscripción, y estos son sus datos:</p>
                			<hr/>
                			<P>Nombre: ".$row['NombreContacto'].' '.$row['ApellidoContacto']."</p>
                			<P>Correo: ".$row['CorreoContacto']."</p>
                			<P>Asunto: ".$row['AsuntoContacto']."</p>
                			<P>Mensaje: ".$row['MensajeContacto']."</p>
                			<hr/>
                			<p><i>Por favor no responda este correo, ya que es generado de manera automática.</i></p>
                		</body>
                	</html>"; 
                	
                	$CN_Remitente = $row['CorreoContacto'];
                }
                
                //Envio de correo Interno
                    $message = \Swift_Message::newInstance()
                    ->setSubject('Tenemos un nuevo contacto desde Corporate Housing Hotels')
                    ->setFrom('cccwhm@gmail.com', '.: Corporate Housing Hotels :.')
                    ->setTo(array($CN_Destinatario))
                    ->setBody($CN_Mensaje,'text/html');
                   $this->get('mailer')->send($message);
                   
                //Envio de correo Confirmación
                    $CN_Mensaje = "<html>
                		<head></head>
                		<body>
                 
                			<h3>Recibimos tu mensaje !</h3>
                			<hr/>
                			<p>Estaremos en contacto contigo en breve, muchas gracias por utilizar nuestros servicios.</p>
                			<hr/>
                			<p><i>Por favor no responda este correo, ya que es generado de manera automática.</i></p>
                		</body>
                	</html>";
                	
                    $message = \Swift_Message::newInstance()
                    ->setSubject('Gracias por contactarnos :)')
                    ->setFrom('cccwhm@gmail.com', '.: Corporate Housing Hotels :.')
                    ->setTo(array($CN_Remitente))
                    ->setBody($CN_Mensaje,'text/html');
                   $this->get('mailer')->send($message);
                   $this->addFlash("success", "::. Gracias .:: por contactarnos, esperamos dar pronta respuesta a tu comunicado.");
            
            
            return $this->redirectToRoute('project_contacto');
        }
        
        
        
        return $this->render('ProjectBundle:sitioProductivo:contacto.html.twig', array('form' => $form->createView()));
    }
    
    
    
    public function hotelesasociadosAction($idCongreso, $mapaCongreso, $mapaAero)
    {
        /* ************************************************
           ********** consulta de los valores *************
           ************************************************
        */
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        $query2 = "SELECT b.*
                   FROM chh_congresovshotel as a, chh_hotel as b
                   WHERE a.congresoRelacion_id = ".$idCongreso." and a.hotelRelacion_id = b.id ";
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
        $mapaC = array('mapaCongreso'=>$mapaCongreso);
        $mapaP = array('mapaAero'=>$mapaAero);
           
        return $this->render('ProjectBundle:sitioProductivo:hotelesasociados.html.twig',  array('home' => $home2, 'mapaC' => $mapaC, 'mapaP' => $mapaP, ));
    }
    
    /**
     * featuredPropertiesAction
     * 
     * @param Request $request
     * @param int $limit
     *
     * @return Response
     */
    public function habitacionesTotalesAction($limit)
    {
         /* **********************************************
           ******** Se hace una segunda consulta ********
           ********************************************** */
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        $query2 = "SELECT b.* 
                   FROM chh_congresovshotel as a, chh_hotel as b
                   WHERE a.congresoRelacion_id = ".$limit." and a.hotelRelacion_id = b.id";
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        
        //return 12;
        return $this->render('ProjectBundle:sitioProductivo:cantidadHabitaciones.html.twig', array('home' => $home2));
    }
    
    public function baseserviciosAction($link)
    {
        return $this->render('ProjectBundle:sitioProductivo:base_servicios.html.twig', array('base_servicios' => $link));    
    }
    
    public function redessocialesAction()
    {
        /* **********************************************
           ******** Se hace una segunda consulta ********
           ********************************************** */
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        $query2 = "SELECT * FROM chh_redes_sociales ";
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        
        //return new Response('asdasd'.$productos->;
        return $this->render('ProjectBundle:sitioProductivo:redessociales.html.twig', array('home' => $home2));
    }
    
    public function aliadosAction()
    {
        /* **********************************************
           ******** Se hace una segunda consulta ********
           ********************************************** */
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        $query2 = "SELECT * FROM chh_aliados ";
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        
        //return new Response('asdasd'.$productos->;
        return $this->render('ProjectBundle:sitioProductivo:aliados.html.twig', array('home' => $home2));
    }
    
    public function contacto2Action()
    {
        // crea una task y le asigna algunos datos ficticios para este ejemplo
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->getForm();
            
        return $this->render('ProjectBundle:sitioProductivo:contacto.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    public function congresosdestacadosAction(Request $request)
    {
        /* **********************************************
           ******** Se hace una segunda consulta ********
           ********************************************** */
        //Recoger GET
        $var=$request->query->get("page");
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        if($var != null || $var != "")
        {
            $query2 = "SELECT a.*, '".$var."' as page
                       FROM chh_congreso as a, chh_idiomas as b
                       WHERE destacado = 1 and b.prefijoIdiomas = '".$var."' and b.id = a.idiomaRelacion_id ";
        }else{
            $query2 = "SELECT a.*, '".$var."' as page
                       FROM chh_congreso as a, chh_idiomas as b
                       WHERE destacado = 1 and b.prefijoIdiomas = 'es' and b.id = a.idiomaRelacion_id ";
        }
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
           
        
        //return new Response('asdasd'.$productos->;
        return $this->render('ProjectBundle:sitioProductivo:congresosDestacados.html.twig', array('home' => $home2));
    }
    
    public function seoAction($valorMenu)
    {
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        
        $query2 = "SELECT a.*
                   FROM chh_seo_general as a
                   WHERE a.menuRelacion_id = ".$valorMenu;
        
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
        
        return $this->render('ProjectBundle:sitioProductivo:seoGeneral.html.twig', array('home' => $home2));
    }
    
    public function seo2Action($valorGeneral)
    {
        $repository = $this->getDoctrine()->getEntityManager();
        $BD2 = $repository->getConnection();
        
        $query2 = "SELECT *
                   FROM chh_seo_especifico
                   WHERE seoRelacion_id = ".$valorGeneral;
        
        $prepare2 = $BD2->prepare($query2);
        $param2 = array();
        $prepare2->execute($param2);
        $home2 = $prepare2->fetchAll();
        
        
           
        
        //return new Response('asdasd'.$productos->;
        return $this->render('ProjectBundle:sitioProductivo:seoEspecifico.html.twig', array('home' => $home2));
    }
}
