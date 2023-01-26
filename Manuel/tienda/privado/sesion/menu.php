    <div class="global-container">
        <div class="menu-container">
            <h1>Bienvenido al Panel de Administración</h1>  
            <ul>
                <li><button onclick="mostrar('altas')">Altas</button></li>
                <li><button onclick="mostrar('consultar')">Consultar</button></li>
                <li><button onclick="mostrar('modificar')">Modificar</button></li>
                <li><button onclick="mostrar('borrar')">Borrar</button></li>                 
            </ul>
        </div>
        <div class="submenu-container">
            <ul id="altas">
                <br>
                <fieldset>
                    <legend>Altas</legend>
                    <li><button onclick="window.location.href='altas.php?accion=Altas&codigo=1'">Categorias</button></li>
                    <li><button onclick="window.location.href='altas.php?accion=Altas&codigo=2'">Productos</button></li>
                </fieldset>            
            </ul>
            <ul id="consultar">
                <br>
                <fieldset>
                    <legend>Consultar</legend>
                    <li><button onclick="window.location.href='consultas.php?accion=Consultar&codigo=1'">Categorias</button></li>
                    <li><button onclick="window.location.href='consultas.php?accion=Consultar&codigo=2'">Productos</button></li>
                    <li><button onclick="window.location.href='consultas.php?accion=Consultar&codigo=3'">Administradores</button></li>
                </fieldset>            
            </ul>
            <ul id="modificar">
                <br>
                <fieldset>
                    <legend>Modificar</legend>
                    <li><button onclick="window.location.href='consultas.php?accion=Modificar&codigo=1'">Categorias</button></li>
                    <li><button onclick="window.location.href='consultas.php?accion=Modificar&codigo=2'">Productos</button></li>
                    <li><button onclick="window.location.href='consultas.php?accion=Modificar&codigo=3'">Administradores</button></li>
                </fieldset>            
            </ul>
            <ul id="borrar">
                <br>
                <fieldset>
                    <legend>Borrar</legend>
                    <li><button onclick="window.location.href='consultas.php?accion=Borrar&codigo=1'">Categorias</button></li>
                    <li><button onclick="window.location.href='consultas.php?accion=Borrar&codigo=2'">Productos</button></li>   
                </fieldset>                    
            </ul>
        </div>
    </div>    