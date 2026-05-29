<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Post;
use App\Models\Pagina;

class SeoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | RENDER PRINCIPAL
    |--------------------------------------------------------------------------
    */

    private function renderApp(array $seo = [], $content = '', $useReact = true)
    {
        $seo = array_merge([

            'title' => 'JEAX Store | Reparación de Rines en CDMX y Ecatepec',

            'description' =>
                'Especialistas en reparación de rines en CDMX y Ecatepec. Enderezado, diamantado, pintura y restauración profesional.',

            'url' => url()->current(),

            'faq' => null

        ], $seo);

        return view('welcome', [
            'seo' => $seo,
            'content' => $content,
            'useReact' => $useReact
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | HOME
    |--------------------------------------------------------------------------
    */

    public function home()
    {
        $faq = [
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => [

                [
                    "@type" => "Question",
                    "name" => "¿Cuánto cuesta reparar un rin?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "El costo depende del daño y del tipo de rin. En JEAX realizamos diagnóstico profesional y cotización personalizada."
                    ]
                ],

                [
                    "@type" => "Question",
                    "name" => "¿Cuánto tarda la reparación?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "La mayoría de los servicios se realizan el mismo día dependiendo del daño."
                    ]
                ],

                [
                    "@type" => "Question",
                    "name" => "¿Reparan rines doblados?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Sí, realizamos enderezado profesional de rines utilizando maquinaria especializada."
                    ]
                ]
            ]
        ];

        $content = '

<section class="seo-hidden">

<h1>
Reparación de Rines en CDMX, Aragón, Neza y Ecatepec
</h1>

<p>
Especialistas en diamantado, enderezado y restauración profesional.
</p>

</section>

';

        return $this->renderApp([
            'title' =>
                'Reparación de Rines en CDMX (Aragón Neza y Ecatepec) | JEAX Store',

            'description' =>
                'Especialistas en reparación de rines en CDMX (Aragón Neza y Ecatepec). Enderezado, diamantado, soldadura y restauración profesional.',

            'faq' => $faq

        ], $content, true);
    }

    /*
    |--------------------------------------------------------------------------
    | REPARACIÓN DE RINES CDMX
    |--------------------------------------------------------------------------
    */

    public function reparacionRinesCdmx()
    {
        $content = '

        <article>

            <h1>
                Reparación de Rines en CDMX
            </h1>

            <section>

                <p>
                    En JEAX realizamos reparación profesional de rines
                    dañados, doblados y rayados en Ciudad de México.
                </p>

                <img
                    src="/img/reparacion-rines.webp"
                    alt="Reparación de rines en CDMX"
                    loading="lazy"
                    width="1200"
                    height="700"
                >

            </section>

            <section>

                <h2>
                    Problemas más comunes
                </h2>

                <ul>
                    <li>Rines doblados por baches</li>
                    <li>Rayones y desgaste</li>
                    <li>Fisuras y golpes</li>
                    <li>Pérdida de estabilidad</li>
                </ul>

            </section>

            <section>

                <h2>
                    Proceso profesional
                </h2>

                <p>
                    Analizamos el daño estructural del rin y aplicamos
                    técnicas especializadas de restauración.
                </p>

            </section>

            <section>

                <h2>
                    Beneficios
                </h2>

                <ul>
                    <li>Mayor seguridad</li>
                    <li>Mejor apariencia</li>
                    <li>Ahorro frente a reemplazo</li>
                </ul>

            </section>

            <section>

                <h2>
                    Agenda tu servicio
                </h2>

                <a href="https://wa.me/525548488280">
                    Solicitar cotización
                </a>

            </section>

        </article>
        ';

        return $this->renderApp([

            'title' =>
                'Reparación de Rines en CDMX | Servicio Profesional JEAX',

            'description' =>
                'Servicio profesional de reparación de rines en CDMX. Restauración, enderezado, diamantado y pintura premium.',

        ], $content, false);
    }

    /*
|--------------------------------------------------------------------------
| NOSOTROS
|--------------------------------------------------------------------------
*/

public function nosotros()
{
    $content = '

    <article>

        <h1>
            Nosotros | JEAX Store
        </h1>

        <section>

            <p>
                En JEAX Store somos especialistas en reparación,
                diamantado y restauración profesional de rines
                en CDMX y Ecatepec.
            </p>

        </section>

    </article>

    ';

    return $this->renderApp([

        'title' =>
            'Nosotros | JEAX Store',

        'description' =>
            'Conoce más sobre JEAX Store y nuestros servicios profesionales de reparación de rines.'

    ], $content, false);
}


/*
|--------------------------------------------------------------------------
| CONTACTO
|--------------------------------------------------------------------------
*/

public function contacto()
{
    $content = '

    <article>

        <h1>
            Contacto | JEAX Store
        </h1>

        <section>

            <p>
                Contáctanos para reparación, diamantado,
                pintura y restauración de rines en CDMX
                y Ecatepec.
            </p>

            <p>
                WhatsApp:
                <a href="https://wa.me/525548488280">
                    55 4848 8280
                </a>
            </p>

        </section>

    </article>

    ';

    return $this->renderApp([

        'title' =>
            'Contacto | JEAX Store',

        'description' =>
            'Contáctanos para reparación profesional de rines en CDMX y Ecatepec.'

    ], $content, false);
}
    /*
    |--------------------------------------------------------------------------
    | ENDEREZADO
    |--------------------------------------------------------------------------
    */

    public function enderezado()
    {
        $content = '

        <article>

            <h1>
                Enderezado de Rines en CDMX
            </h1>

            <section>

                <p>
                    Corregimos deformaciones y golpes ocasionados por baches
                    utilizando maquinaria especializada.
                </p>

                <img
                    src="/img/enderezado-rines.webp"
                    alt="Enderezado de rines en CDMX"
                    loading="lazy"
                    width="1200"
                    height="700"
                >

            </section>

            <section>

                <h2>
                    Síntomas de un rin doblado
                </h2>

                <ul>
                    <li>Vibración al manejar</li>
                    <li>Desgaste irregular</li>
                    <li>Pérdida de estabilidad</li>
                </ul>

            </section>

            <section>

                <h2>
                    Atención inmediata
                </h2>

                <a href="https://wa.me/525548488280">
                    Cotizar servicio
                </a>

            </section>

        </article>
        ';

        return $this->renderApp([

            'title' =>
                'Enderezado de Rines en CDMX y Ecatepec | JEAX',

            'description' =>
                'Especialistas en enderezado de rines doblados en CDMX y Ecatepec. Atención rápida y profesional.'

        ], $content, false);
    }

    /*
    |--------------------------------------------------------------------------
    | DIAMANTADO
    |--------------------------------------------------------------------------
    */
    /*
|--------------------------------------------------------------------------
| PREGUNTAS FRECUENTES
|--------------------------------------------------------------------------
*/

public function preguntas()
{
    $content = '

    <article>

        <h1>
            Preguntas Frecuentes
        </h1>

        <section>

            <h2>
                ¿Cuánto tarda la reparación?
            </h2>

            <p>
                Dependiendo del daño, muchos servicios se entregan
                el mismo día.
            </p>

        </section>

        <section>

            <h2>
                ¿Reparan rines doblados?
            </h2>

            <p>
                Sí, realizamos enderezado profesional de rines.
            </p>

        </section>

        <section>

            <h2>
                ¿Trabajan rines deportivos?
            </h2>

            <p>
                Sí, trabajamos rines deportivos, de lujo y OEM.
            </p>

        </section>

        <section>

            <a href="https://wa.me/525548488280">
                Solicitar información
            </a>

        </section>

    </article>

    ';

    return $this->renderApp([

        'title' =>
            'Preguntas Frecuentes | JEAX Store',

        'description' =>
            'Resolvemos tus dudas sobre reparación, diamantado y restauración de rines en CDMX y Ecatepec.'

    ], $content, false);
}
    public function diamantado()
    {
        $content = '

        <article>

            <h1>
                Diamantado de Rines en CDMX
            </h1>

            <section>

                <p>
                    Recupera el acabado original de tus rines con
                    diamantado profesional de alta precisión.
                </p>

                <img
                    src="/img/diamantado-rines.webp"
                    alt="Diamantado de rines en CDMX"
                    loading="lazy"
                    width="1200"
                    height="700"
                >

            </section>

            <section>

                <h2>
                    Beneficios del diamantado
                </h2>

                <ul>
                    <li>Acabado premium</li>
                    <li>Recupera brillo original</li>
                    <li>Mejora estética del vehículo</li>
                </ul>

            </section>

            <section>

                <a href="https://wa.me/525548488280">
                    Solicitar diamantado
                </a>

            </section>

        </article>
        ';

        return $this->renderApp([

            'title' =>
                'Diamantado de Rines en CDMX | Restauración Premium JEAX',

            'description' =>
                'Servicio profesional de diamantado de rines en CDMX. Restauración estética premium para rines deportivos.'

        ], $content, false);
    }

    /*
    |--------------------------------------------------------------------------
    | CATEGORÍAS
    |--------------------------------------------------------------------------
    */

    /*
|--------------------------------------------------------------------------
| TÉRMINOS Y CONDICIONES
|--------------------------------------------------------------------------
*/

public function terminos()
{
    $content = '

    <article>

        <h1>
            Términos y Condiciones
        </h1>

        <section>

            <p>
                Al utilizar los servicios de JEAX Store,
                el cliente acepta los presentes términos
                y condiciones.
            </p>

        </section>

        <section>

            <h2>
                Servicios
            </h2>

            <p>
                Los tiempos de entrega y costos pueden variar
                dependiendo del estado del rin y del servicio solicitado.
            </p>

        </section>

        <section>

            <h2>
                Garantía
            </h2>

            <p>
                La garantía aplica únicamente sobre defectos
                derivados del servicio realizado.
            </p>

        </section>

        <section>

            <h2>
                Contacto
            </h2>

            <p>
                WhatsApp:
                <a href="https://wa.me/525548488280">
                    55 4848 8280
                </a>
            </p>

        </section>

    </article>

    ';

    return $this->renderApp([

        'title' =>
            'Términos y Condiciones | JEAX Store',

        'description' =>
            'Consulta los términos y condiciones de los servicios de reparación y restauración de rines de JEAX Store.'

    ], $content, false);
}

    public function categorias()
    {
        return $this->renderApp([

            'title' =>
                'Servicios de Reparación de Rines | JEAX Store',

            'description' =>
                'Conoce nuestros servicios de reparación, diamantado, pintura, restauración y enderezado de rines.'

        ], '', true);
    }

    /*
    |--------------------------------------------------------------------------
    | BLOG
    |--------------------------------------------------------------------------
    */

    public function blog()
    {
        return $this->renderApp([

            'title' =>
                'Blog Automotriz y Reparación de Rines | JEAX',

            'description' =>
                'Consejos y guías sobre reparación de rines, mantenimiento automotriz y restauración premium.'

        ], '', true);
    }

    /*
    |--------------------------------------------------------------------------
    | POSTS
    |--------------------------------------------------------------------------
    */

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return $this->renderApp([

            'title' =>
                ($post->titulo ?? $slug) . ' | JEAX Blog',

            'description' =>
                $post->extracto ?? $post->descripcion ?? ''

        ], '', true);
    }

    /*
    |--------------------------------------------------------------------------
    | PÁGINAS
    |--------------------------------------------------------------------------
    */

    public function pagina($slug)
    {
        $pagina = Pagina::where('slug', $slug)->firstOrFail();

        return $this->renderApp([

            'title' =>
                ($pagina->titulo ?? $slug) . ' | JEAX Store',

            'description' =>
                $pagina->descripcion ?? ''

        ], '', true);
    }

    /*
    |--------------------------------------------------------------------------
    | SITEMAP
    |--------------------------------------------------------------------------
    */

    public function sitemap()
    {
        $categorias = Categoria::all();
        $posts = Post::all();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';

        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        $urls = [

            '/',
            '/reparacion-de-rines-cdmx',
            '/enderezado-rines',
            '/diamantado-rines-cdmx',
            '/reparacion-rines-ecatepec',
            '/reparacion-rines-cerca-de-mi'

        ];

        foreach ($urls as $url) {

            $xml .= '<url>';

            $xml .= '<loc>' . url($url) . '</loc>';

            $xml .= '<changefreq>weekly</changefreq>';

            $xml .= '<priority>1.0</priority>';

            $xml .= '</url>';
        }

        foreach ($categorias as $cat) {

            $xml .= '<url>';

            $xml .= '<loc>' .
                url('/categorias/' . $cat->slug) .
                '</loc>';

            $xml .= '<changefreq>weekly</changefreq>';

            $xml .= '<priority>0.8</priority>';

            $xml .= '</url>';
        }

        foreach ($posts as $post) {

            $xml .= '<url>';

            $xml .= '<loc>' .
                url('/blog/post/' . $post->slug) .
                '</loc>';

            $xml .= '<changefreq>monthly</changefreq>';

            $xml .= '<priority>0.6</priority>';

            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }

    /*
    |--------------------------------------------------------------------------
    | APP REACT
    |--------------------------------------------------------------------------
    */

    public function app()
    {
        return $this->renderApp([], '', true);
    }
}