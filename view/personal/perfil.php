<?php
    include 'header.php'
?>
    <div class="page-wrapper">
            <div class="content">
                <!--TITULO PERFIL-->
                <div class="row">
                    <!--PERFIL-->
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">Mi Perfil</h4>
                    </div>
                    <!--FIN PERFIL-->

                    <!--BOTON EDITAR PERFIL-->
                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="./edit-perfil.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Editar Perfil</a>
                    </div>
                    <!--FIN BOTON EDITAR PERFIL-->
                </div>
                <!--FIN TITULO PERFIL-->

                <!--INFORMACION PERFIL-->
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <!--AVATAR PERFIL-->
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="../assets/img/doctor-03.jpg" alt=""></a>
                                    </div>
                                </div>
                                <!--FIN AVATAR PERFIL-->
                                <!--DATOS PERFIL-->
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">Cristina Groves</h3>
                                                <small class="text-muted">Gynecologist</small>
                                                <div class="staff-id">ID Colegiatura : DR-0001</div>
<!--                                                <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div>-->
                                            </div>
                                        </div>
                                        <!--DATOS CONTACTO-->
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Telefono:</span>
                                                    <span class="text"><a href="#">770-889-6484</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#">cristinagroves@example.com</a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Fecha Nacimiento:</span>
                                                    <span class="text">3rd March</span>
                                                </li>
                                                <li>
                                                    <span class="title">Direccion:</span>
                                                    <span class="text">ssssssss</span>
                                                </li>
                                                <li>
                                                    <span class="title">Sexo:</span>
                                                    <span class="text">sssss</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--FIN DATOS CONTACTO-->
                                    </div>
                                </div>
                                <!--FIN DATOS PERFIL-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIN INFORMACION PERFIL-->

                <!--TAB PERFIL-->
				<div class="profile-tabs">
					<ul class="nav nav-tabs nav-tabs-bottom">
						<li class="nav-item"><a class="nav-link active" href="#about-cont" data-toggle="tab">Acerca de mi</a></li>
						<!--<li class="nav-item"><a class="nav-link" href="#bottom-tab2" data-toggle="tab">Profile</a></li>
						<li class="nav-item"><a class="nav-link" href="#bottom-tab3" data-toggle="tab">Messages</a></li>-->
					</ul>
                    <!--SECCION ACERCA DE-->
					<div class="tab-content">
						<div class="tab-pane show active" id="about-cont">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--INFORMACION EDUCACION-->
                                    <div class="card-box">
                                        <!--TITULO EDUCACION-->
                                        <div class="row">
                                            <!--PERFIL-->
                                            <div class="col-sm-7 col-6">
                                                <h3 class="card-title">Educacion</h3>
                                            </div>
                                            <!--FIN PERFIL-->

                                            <!--BOTON AGREGAR EDUCACION-->
                                            <div class="col-sm-5 col-6 text-right m-b-30">
                                                <a href="./add-educacion.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Agregar Educacion</a>
                                            </div>
                                            <!--FIN BOTON EDITAR PERFIL-->
                                        </div>
                                        <!--FIN TITULO PERFIL-->
                                        <!--DETALLE EDUCACION-->
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">International College of Medical Science (UG)</a>
                                                            <div>MBBS</div>
                                                            <span class="time">2001 - 2003</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">International College of Medical Science (PG)</a>
                                                            <div>MD - Obstetrics & Gynaecology</div>
                                                            <span class="time">1997 - 2001</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--FIN DETALLE EDUCACION-->
                                    </div>
                                    <!--FIN INFORMACION EDUCACION-->

                                    <!--INFORMACION EXPERIENCIA-->
                                    <div class="card-box mb-0">
                                        <!--TITULO EXPERIENCIA-->
                                        <div class="row">
                                            <!--PERFIL-->
                                            <div class="col-sm-7 col-6">
                                                <h3 class="card-title">Experiencia</h3>
                                            </div>
                                            <!--FIN PERFIL-->

                                            <!--BOTON AGREGAR EDUCACION-->
                                            <div class="col-sm-5 col-6 text-right m-b-30">
                                                <a href="./add-educacion.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Agregar Experiencia</a>
                                            </div>
                                            <!--FIN BOTON EDITAR PERFIL-->
                                        </div>
                                        <!--FIN TITULO EXPERIENCIA-->
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">Consultant Gynecologist</a>
                                                            <span class="time">Jan 2014 - Present (4 years 8 months)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">Consultant Gynecologist</a>
                                                            <span class="time">Jan 2009 - Present (6 years 1 month)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--FIN INFORMACION EXPERIENCIA-->
                                </div>
                            </div>
						</div>
						<!--<div class="tab-pane" id="bottom-tab2">
                            Tab content 2
                        </div>
						<div class="tab-pane" id="bottom-tab3">
                            Tab content 3
                        </div>-->
					</div>
				</div>
                <!--FIN TAB PERFIL-->
            </div>
        </div>
<?php
    include 'footer.php'
?>