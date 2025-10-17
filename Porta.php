<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Ejercicios, Tareas y Proyectos</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: black;
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        header {
            text-align: center;
            margin-bottom: 40px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #2c3e50;
            font-size: 2.8rem;
            margin-bottom: 10px;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .subtitle {
            font-size: 1.2rem;
            color: #7f8c8d;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50px;
            padding: 5px;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .tab-button {
            padding: 12px 25px;
            background: none;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #7f8c8d;
        }
        
        .tab-button.active {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            box-shadow: 0 5px 15px rgba(106, 17, 203, 0.4);
        }
        
        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }
        
        .tab-content.active {
            display: block;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .table-container {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        
        .table-header {
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .ejercicios-header {
            background: linear-gradient(to right, #6a11cb, #2575fc);
        }
        
        .tareas-header {
            background: linear-gradient(to right, #00b09b, #96c93d);
        }
        
        .proyectos-header {
            background: linear-gradient(to right, #ff512f, #dd2476);
        }
        
        .table-header h2 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }
        
        .table-header p {
            opacity: 0.9;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        thead {
            background-color: #f8f9fa;
        }
        
        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            color: #2c3e50;
            border-bottom: 2px solid #e9ecef;
        }
        
        td {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
        }
        
        tbody tr {
            transition: background-color 0.2s;
        }
        
        tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        .col-numero {
            width: 15%;
            font-weight: 600;
        }
        
        .ejercicios-table .col-numero {
            color: #6a11cb;
        }
        
        .tareas-table .col-numero {
            color: #00b09b;
        }
        
        .proyectos-table .col-numero {
            color: #ff512f;
        }
        
        .col-nombre {
            width: 50%;
        }
        
        .col-enlace {
            width: 35%;
        }
        
        .enlace-btn {
            display: inline-block;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s;
            text-align: center;
            min-width: 100px;
        }
        
        .ejercicios-table .enlace-btn {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            box-shadow: 0 3px 10px rgba(106, 17, 203, 0.3);
        }
        
        .tareas-table .enlace-btn {
            background: linear-gradient(to right, #00b09b, #96c93d);
            box-shadow: 0 3px 10px rgba(0, 176, 155, 0.3);
        }
        
        .proyectos-table .enlace-btn {
            background: linear-gradient(to right, #ff512f, #dd2476);
            box-shadow: 0 3px 10px rgba(255, 81, 47, 0.3);
        }
        
        .enlace-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .welcome-message {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .error {
            background: #e74c3c;
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .back-button {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
        }
        
        .back-button button {
            background: #2c3e50;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .back-button button:hover {
            background: #1a252f;
            transform: translateY(-2px);
        }
        
        footer {
            text-align: center;
            margin-top: 40px;
            color: white;
            opacity: 0.8;
        }
        
        .stats {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            flex: 1;
            max-width: 200px;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .ejercicios-stat .stat-number {
            color: #6a11cb;
        }
        
        .tareas-stat .stat-number {
            color: #00b09b;
        }
        
        .proyectos-stat .stat-number {
            color: #ff512f;
        }
        
        .stat-label {
            color: #7f8c8d;
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            .tabs {
                flex-direction: column;
                width: 100%;
            }
            
            .tab-button {
                width: 100%;
                margin-bottom: 5px;
            }
            
            th, td {
                padding: 10px;
            }
            
            .table-container {
                overflow-x: auto;
            }
            
            table {
                min-width: 600px;
            }
            
            .stats {
                flex-direction: column;
                align-items: center;
            }
            
            .stat-card {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];

        if ($usuario === "186831" && $password === "Vale13092006") {
?>
        <div class="container">
        <header>
            <h1>Portafolio de evidencias</h1>
            <p class="subtitle">CNO II - Valeria Campos Elvira - 186831</p>
        </header>
        
        <div class="stats">
            <div class="stat-card ejercicios-stat">
                <div class="stat-number">25</div>
                <div class="stat-label">Ejercicios</div>
            </div>
            <div class="stat-card tareas-stat">
                <div class="stat-number">4 y 4</div>
                <div class="stat-label">Tareas y Retos</div>
            </div>
            <div class="stat-card proyectos-stat">
                <div class="stat-number">1</div>
                <div class="stat-label">Proyectos</div>
            </div>
        </div>
        
        <div class="tabs">
            <button class="tab-button active" data-tab="ejercicios">Ejercicios</button>
            <button class="tab-button" data-tab="tareas">Tareas</button>
            <button class="tab-button" data-tab="proyectos">Proyectos</button>
        </div>
        
        <div class="tab-content active" id="ejercicios">
            <div class="table-container">
                <div class="table-header ejercicios-header">
                    <h2>Ejercicios de PHP</h2>
                    <p>Lista completa de ejercicios prácticos</p>
                </div>
                <table class="ejercicios-table">
                    <thead>
                        <tr>
                            <th class="col-numero">Ejercicio</th>
                            <th class="col-nombre">Nombre del ejercicio</th>
                            <th class="col-enlace">Enlace</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-numero">1</td>
                            <td class="col-nombre">Introducción a php</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio1.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">2 - 3</td>
                            <td class="col-nombre">¡Hola mundo!</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio2.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">4 - 6</td>
                            <td class="col-nombre">Primer ejemplo de variables</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio4.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">7</td>
                            <td class="col-nombre">Introducción a los arrays, metodo largo</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio7.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">8</td>
                            <td class="col-nombre">Operadores en PHP</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio8.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">9</td>
                            <td class="col-nombre">Condicional IF</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio9.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">10</td>
                            <td class="col-nombre">Condicional Switch</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio10.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">11</td>
                            <td class="col-nombre">Tabla Condicional 1</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio11.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">12</td>
                            <td class="col-nombre">Bucle While</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/practica12.html" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">13</td>
                            <td class="col-nombre">Bucle While 2</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio13.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                            <tr>
                                <td class='col-numero'>14</td>
                                <td class='col-nombre'>Análisis de formulario</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/practica14.html" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>15</td>
                                <td class='col-nombre'>Análisis de formulario 2</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/practica15.html" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>16</td>
                                <td class='col-nombre'>Feedback</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio16.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>17</td>
                                <td class='col-nombre'>CONTADOR DE VISITAS</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio17.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>18</td>
                                <td class='col-nombre'>LIBRO DE VISITAS</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio18.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>19</td>
                                <td class='col-nombre'> ENCUESTA A UN ARCHIVO </td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio19.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>20</td>
                                <td class='col-nombre'>Mysql conection</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio20.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>21</td>
                                <td class='col-nombre'>Crear una base de datos</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio21.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>22</td>
                                <td class='col-nombre'>Crear una tabla dentro de la base de datos</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio22.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>23</td>
                                <td class='col-nombre'>Insertar los registros en la tabla</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio23.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>24</td>
                                <td class='col-nombre'>Consultar registros de base de datos</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio24.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>24 - a</td>
                                <td class='col-nombre'>Buscar registro en base de datos</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio24a.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>25</td>
                                <td class='col-nombre'>Borrar en un registro en especifico</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio25.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                            <tr>
                                <td class='col-numero'>25 - a</td>
                                <td class='col-nombre'>Borrar registros</td>
                                <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/ejercicio25a.php" class="enlace-btn">Abrir</a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="tab-content" id="tareas">
            <div class="table-container">
                <div class="table-header tareas-header">
                    <h2>Tareas de PHP</h2>
                    <p>Lista completa de tareas asignadas</p>
                </div>
                <table class="tareas-table">
                        <tr>
                            <th class="col-numero">Tarea</th>
                            <th class="col-nombre">Nombre de la tarea</th>
                            <th class="col-enlace">Enlace</th>
                        </tr>
                        <tr>
                            <td class="col-numero">1</td>
                            <td class="col-nombre">Canción en php</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/tarea1.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">2</td>
                            <td class="col-nombre">Tabla con arreglos</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/tarea2.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">3</td>
                            <td class="col-nombre">Tabla de multiplicar</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/tarea3.html" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">4</td>
                            <td class="col-nombre">Acceso al sistema</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/tarea4.html" class="enlace-btn">Abrir</a></td>
                        </tr>
                        
                        <tr>
                            <th class="col-numero">Reto</th>
                            <th class="col-nombre">Nombre del Reto</th>
                            <th class="col-enlace">Enlace</th>
                        </tr>
                        <tr>
                            <td class="col-numero">1</td>
                            <td class="col-nombre">Introducir datos</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/reto1.html" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">2</td>
                            <td class="col-nombre">Página de registros</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/reto2.html" class="enlace-btn">Abrir</a></td>
                        </tr>
                        <tr>
                            <td class="col-numero">3 - 4</td>
                            <td class="col-nombre">Test de nomofobia</td>
                            <td class="col-enlace"><a href="http://186831cno2.atwebpages.com/Parcial2/test.php" class="enlace-btn">Abrir</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="tab-content" id="proyectos">
            <div class="table-container">
                <div class="table-header proyectos-header">
                    <h2>Proyecto</h2>
                    <p>Proyecto desarrollado</p>
                </div>
                <table class="proyectos-table">
                    <thead>
                        <tr>
                            <th class="col-numero">Proyecto</th>
                            <th class="col-nombre">Nombre del proyecto</th>
                            <th class="col-enlace">Enlace</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-numero">1</td>
                            <td class="col-nombre">primera parte</td>
                            <td class="col-enlace"><a href="#" class="enlace-btn">Abrir</a></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="welcome-message">
            <h2>Bienvenida Valeria Campos Elvira </h2>
            <p>Has accedido correctamente al Portafolio de evidencias de Valeria Campos Elvira - 186831</p>
        </div>
        
        <div style="text-align: center;">
            <a href="tarea4.html" class="back-button">
                <button>Regresar al Inicio</button>
            </a>
        </div>
        
        <footer>
            <p>Universidad Politécnica de San Luis Potosí &copy; 2025</p>
        </footer>
    </div>
<?php
} else {
            echo "<p class='error'>Acceso denegado. Usuario o contraseña incorrectos.</p>";
        }
    } else {
        echo "<p class='error'>Acceso no autorizado.</p>";
    }
    echo '<br><a href="tarea4.html"><button>Regresar</button></a>';
 ?>
    <script>
        // Funcionalidad de las pestañas
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');
            
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remover clase active de todos los botones y contenidos
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    
                    // Agregar clase active al botón clickeado
                    button.classList.add('active');
                    
                    // Mostrar el contenido correspondiente
                    const tabId = button.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
        });
    </script>
</body>
</html>