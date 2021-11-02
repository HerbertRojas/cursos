<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;
use App\Models\EstadoCurso;
use App\Helpers\Image;
use App\Models\User;
use App\Models\Role;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estado_publicado = EstadoCurso::select('id')->where('nombre','Publicado')->first();
        $cursos = [
            [
                "titulo" => "Curso de Laravel 7",
                "descripcion" => "Aprende Laravel 7 desde 0 con las mejores prácticas.",
                "precio" => 9.99,
                "destacado" => 1,
                "bg" => "F35144",
                "categorias" => [1],
                "estado_curso_id" =>$estado_publicado->id
            ],
            [
                "titulo" => "Laravel y Voyager",
                "descripcion" => "Desarrollo de sistemas de administración brutales con Laravel Voyager.",
                "precio" => 11.99,
                "bg" => "F35144",
                "categorias" => [1],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Laravel y Vuejs",
                "descripcion" => "Laravel y Vuejs, dos poderosas herramientas para el desarrollo de sitios web.",
                "precio" => 19.99,
                "bg" => "F35144",
                "categorias" => [1, 3]
            ],
            [
                "titulo" => "Node.js y Express",
                "descripcion" => "Node.js en el servidor con su Framework por excelencia, Express, fácil y rápido de aprender",
                "precio" => 29.99,
                "destacado" => 1,
                "bg" => "8DBC58",
                "categorias" => [2],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "MVC con Node.js y TypeScrpt",
                "descripcion" => "Vamos a crear un sistema MVC con Node.js y TypeScript desde 0 para aprender a crear nuestros propios proyectos desde 0",
                "precio" => 29.99,
                "bg" => "8DBC58",
                "categorias" => [2],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Vuejs y Vuex",
                "precio" => 24.99,
                "descripcion" => "Vuex es el almacén de datos por excelencia para Vuejs, un objeto global que nos facilita la vida a los programadores",
                "destacado" => 1,
                "bg" => "41B881",
                "categorias" => [3],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Vue 3",
                "descripcion" => "La nueva versión de Vuejs, Vue 3 nos ofrece una nueva API y una nueva forma de escribir nuestros proyectos sin perder lo que ya conocíamos",
                "precio" => 14.99,
                "bg" => "41B881",
                "categorias" => [3],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Vue y TypeScript",
                "descripcion" => "De forma alternativa Vuejs nos ofrece la posibilidad de tipar nuestro código utilizando TypeScript, aquí aprenderás cómo hacerlo",
                "precio" => 19.99,
                "destacado" => 1,
                "bg" => "41B881",
                "categorias" => [3],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Reactjs CRUD",
                "descripcion" => "Para aprender cualquier lenguaje de programación/framework una de las mejores vías para entender muchas cosas",
                "precio" => 9.99,
                "bg" => "0CC1E9",
                "categorias" => [4],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "React Native y Expo",
                "precio" => 39.99,
                "descripcion" => "Aprende a desarrrollar aplicaciones móviles con React Native y Expo paso a paso con este súper curso",
                "destacado" => 1,
                "bg" => "0CC1E9",
                "categorias" => [4],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Deno from Scratch",
                "descripcion" => "Deno -> Node es la nueva herramienta que nos ofrece Ryan Dahl, el creador de Node.js, para desarrollar software en el servidor con JavaScript",
                "precio" => 9.99,
                "destacado" => 1,
                "bg" => "0098B6",
                "categorias" => [5],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "MVC con Deno",
                "descripcion" => "Vamos a crear un pequeño sistema MVC con Deno y Alosaur, dos poderosas herramientas que gracias a los decoradores nos permiten hacer cosas increíbles",
                "precio" => 9.99,
                "bg" => "0098B6",
                "categorias" => [5],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "API REST con Deno",
                "descripcion" => "Algo muy típico cuando estamos empezando es desarrollar una pequeña API REST, por llamarle de alguna forma, que nos permite interactuar con Deno en este caso",
                "precio" => 9.99,
                "bg" => "0098B6",
                "categorias" => [5],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Primer proyecto Amplify",
                "descripcion" => "Aprende a desarrollar tu primer proyecto básico con Amplify Framework, una poderosa herramienta de Amazon Web Services",
                "precio" => 9.99,
                "destacado" => 1,
                "bg" => "FF9733",
                "categorias" => [6],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Cognito y Amplify",
                "descripcion" => "Cognite en Amplify Framework nos permite desarrollar un completo sistema de autenticación fácil y seguro para nuestros usuarios",
                "precio" => 14.99,
                "bg" => "FF9733",
                "categorias" => [6],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Flutter y Amplify",
                "descripcion" => "Con Flutter podemos crear Aplicaciones Móviles Híbridas y Nativas, ¡no te pierdas este curso!",
                "precio" => 19.99,
                "destacado" => 1,
                "bg" => "FF9733",
                "categorias" => [6],
                "estado_curso_id" => $estado_publicado->id
            ],
            [
                "titulo" => "Swift y Aplicaciones",
                "descripcion" => "Con Swift desarrolle aplicaciones móviles para Iphone",
                "precio" => 19.99,
                "bg" => "FF9733",
                "categorias" => [6],
                "estado_curso_id" => $estado_publicado->id
            ],
        ];

        $role_docente = Role::where('nombre','Docente')->first();

        foreach ($cursos as $curso) {

            $categorias = $curso['categorias'];

            $curso['imagen'] = null;

            $curso['user_id'] = User::where('role_id',$role_docente->id)->first()->id;

            unset($curso['categorias']);
            unset($curso['bg']);

            $modelo = Curso::create($curso);
            $modelo->categorias()->sync($categorias);
        }
    }
}
