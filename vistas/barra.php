
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Bienvenido</h3>
            </div>

  
            <ul class="list-unstyled components">
                <p>uHotel</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Habitaciones</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="buscarh.php">Buscar habitaciones</a>
                        </li>
                        <a href="agregarh.php"> Agregar habitacion</a>
                    </ul>
                </li>
                
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Clientes</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Ver clientes</a>
                        </li>
                        <li>
                            <a href="#">Hacer reservación</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#">Inventario</a>
                </li>
                
            </ul>
           <div class="text-center"> 
            <a  href="code/salir.php" role="button" class="btn btn-danger">
               <span>Cerrar Sesión</span>
            </a>
               </div>
            </ul>
            <br>
         </nav>

  <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

