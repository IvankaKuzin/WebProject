<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OSPanel\domains\project.loc/themes/test/pages/reviews.htm */
class __TwigTemplate_485a27c5a121a3e51a30f97495bb1a9c121f6ed5d9f4b4ed40d06df5a9746879 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"container text-center\">
  <div class=\"row\" style=\"background-image: linear-gradient(#9cb781, #51940e);\">
    <div class=\"col-sm-1\">
      <img src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-removebg-preview.png");
        echo "\" >
    </div>
    <div class=\"col-sm-9\">
    </div>
    <div class=\"col-sm-2\"> </div>
  </div>

  <div class=\"row\" style=\"background-color: #4a025d; color: white\">
    <div class=\"col-12\">
      <h4>
        Асортимент наших рослин
      </h4>
    </div>
  </div>

  <div class=\"row\" style=\"margin: 10px 0 10px 0;\">
    <div class=\"col-4\">
      <h4 style=\"border-bottom: 2px solid #9d0d12;text-align: left\">
        Садівництво для початківців<br>
      </h4>
      <p style=\"text-align: left\">
        Підрозділ садівництва є одним з найпотужніших по займаних площах насаджень та вирощуванню
        фруктів. Також є побудовані одні з найбільших фруктосховищ обладнанні найпотужнішими лініями
        для сортування та найсучаснішим обладнанням для зберігання, що дає можливість представити
        для ринку велику кількість якісно вирощеної та підготовленої до реалізації продукції.</p>
    </div>
    <div class=\"col-8\">
      <table class=\"table table-striped table-hover table-bordered table-responsive-x1\">
        <thead>
        <tr class=\"table-info\">
          <th scope=\"col\">#</th>
          <th scope=\"col\">Назва рослини</th>
          <th scope=\"col\">Сорт</th>
          <th scope=\"col\">Цвітіння</th>
          <th scope=\"col\">Місце посадки</th>
          <th scope=\"col\">Вік</th>
        </tr>
        </thead>
        <tbody class=\"table-secondary\">
        <tr class=\"table-warning\">
          <th scope=\"row\">1</th>
          <td>Гортензія</td>
          <td>Bombshell</td>
          <td>липень-вересень</td>
          <td>сонце, півтінь</td>
          <td>2-х річний</td>
        </tr>
        <tr class=\"table-dark\">
          <th scope=\"row\">2</th>
          <td>Вітекс священний</td>
          <td>Delta Blues</td>
          <td>липень-серпень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">3</th>
          <td class=\"table-light\">Ялівець китайський</td>
          <td>Plumosa Aureovariegata</td>
          <td>блакитно-зелена, на кінцях - біла, взимку коричнево-жовта</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">4</th>
          <td>Спірея</td>
          <td>Golden Princess</td>
          <td>червень-вересень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">5</th>
          <td>Фотінія</td>
          <td>Fenna</td>
          <td>Цілий рік - темно-зелений і яскраво-рожевий кольір, а навесні квітне кремовими квітами</td>
          <td>сонце, півтінь</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">6</th>
          <td>Гортензія волотиста</td>
          <td>Petite Star</td>
          <td>липень-жовтень</td>
          <td>сонце, півтінь</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">7</th>
          <td>Клематис</td>
          <td>Hanajima</td>
          <td>червень-вересень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">8</th>
          <td>Троянда шраб</td>
          <td>Барон Жиро де Лейн</td>
          <td>червень-жовтень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">9</th>
          <td>Бузина чорна</td>
          <td>Black Lace</td>
          <td>червень-липень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

<div class=\"row\">
    <h4 style=\"border-bottom: 2px solid #9f49b2;text-align: left\">
      Заиште свій відгук<br>
    </h4>
</div>

<form 
    data-request=\"onGetdata\"
    data-request-validate
    data-request-flash
    data-request-files
    class=\"row\">
    <div class=\"mb-3\">
      <label for=\"inputName\" class=\"form-label\">Ваше ім'я</label>
      <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"name\" placeholder=\"Name\">
      <div class=\"alert alert-danger\" data-validate-for=\"name\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Коментар</label>
      <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" name=\"text\"></textarea>
      <div class=\"alert alert-danger\" data-validate-for=\"text\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"text\" class=\"form-label\">Додайте Ваше фото</label>
      <input type=\"file\" class=\"form-control\" id=\"exampleFormControlInput1\" name=\"file_input\">
      <div class=\"alert alert-danger\" data-validate-for=\"text\"></div>
    </div>
    <div class=\"mb-3\">
    <button 
    data-request=\"onSaveBD\"
            data-request-flash
        type=\"submit\" class=\"btn btn-primary mb-3\">Надіслати відгук</button>
  </div>
</form>


<div class=\"row\" id =\"comments\">
    <h4 style=\"border-bottom: 2px solid #9f49b2;text-align: left\">
      Відгуки<br>
    </h4>
    <div class=\"col\">
    
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrComments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 163
            echo "            <div class=\"thumbnail\">
                <a target=\"_blank\">
                  <img src=\"";
            // line 165
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comments"], "image", [], "any", false, false, true, 165), "path", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"error\" style=\"width:100%\">
                  <div class=\"caption\">
                    <p> ";
            // line 167
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["comments"], "comment", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo " </p>
                  </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "        
    </div>
    
    <style>
    .col {
    display: flex;
    overflow-x: scroll;
    -webkit-overflow-scrolling: touch; 
    scroll-behavior: smooth; 
    }
    .thumbnail {
      width: calc(100% / 3); 
      flex-shrink: 0; 
      margin-right: 10px;
    }
    
      .img-fluid {
      width: calc(100% / 3); 
      height: 200px; 
      }
    </style>
    
 </div>

  <div class=\"row\" style=\"position: center\">
    <div class=\"col-5\"> </div>
    <div class=\"col-2\" style=\"position: center\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\" style=\"margin:  5px 25% 5px 25%;\">
          <li class=\"page-item\"><a class=\"page-link\" href=\"../\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"../reviews\">2</a></li>
        </ul>
      </nav>
    </div>
    <div class=\"col-5\"> </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\project.loc/themes/test/pages/reviews.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 172,  218 => 167,  213 => 165,  209 => 163,  205 => 162,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container text-center\">
  <div class=\"row\" style=\"background-image: linear-gradient(#9cb781, #51940e);\">
    <div class=\"col-sm-1\">
      <img src=\"{{ 'assets/images/logo-removebg-preview.png'|theme }}\" >
    </div>
    <div class=\"col-sm-9\">
    </div>
    <div class=\"col-sm-2\"> </div>
  </div>

  <div class=\"row\" style=\"background-color: #4a025d; color: white\">
    <div class=\"col-12\">
      <h4>
        Асортимент наших рослин
      </h4>
    </div>
  </div>

  <div class=\"row\" style=\"margin: 10px 0 10px 0;\">
    <div class=\"col-4\">
      <h4 style=\"border-bottom: 2px solid #9d0d12;text-align: left\">
        Садівництво для початківців<br>
      </h4>
      <p style=\"text-align: left\">
        Підрозділ садівництва є одним з найпотужніших по займаних площах насаджень та вирощуванню
        фруктів. Також є побудовані одні з найбільших фруктосховищ обладнанні найпотужнішими лініями
        для сортування та найсучаснішим обладнанням для зберігання, що дає можливість представити
        для ринку велику кількість якісно вирощеної та підготовленої до реалізації продукції.</p>
    </div>
    <div class=\"col-8\">
      <table class=\"table table-striped table-hover table-bordered table-responsive-x1\">
        <thead>
        <tr class=\"table-info\">
          <th scope=\"col\">#</th>
          <th scope=\"col\">Назва рослини</th>
          <th scope=\"col\">Сорт</th>
          <th scope=\"col\">Цвітіння</th>
          <th scope=\"col\">Місце посадки</th>
          <th scope=\"col\">Вік</th>
        </tr>
        </thead>
        <tbody class=\"table-secondary\">
        <tr class=\"table-warning\">
          <th scope=\"row\">1</th>
          <td>Гортензія</td>
          <td>Bombshell</td>
          <td>липень-вересень</td>
          <td>сонце, півтінь</td>
          <td>2-х річний</td>
        </tr>
        <tr class=\"table-dark\">
          <th scope=\"row\">2</th>
          <td>Вітекс священний</td>
          <td>Delta Blues</td>
          <td>липень-серпень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">3</th>
          <td class=\"table-light\">Ялівець китайський</td>
          <td>Plumosa Aureovariegata</td>
          <td>блакитно-зелена, на кінцях - біла, взимку коричнево-жовта</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">4</th>
          <td>Спірея</td>
          <td>Golden Princess</td>
          <td>червень-вересень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">5</th>
          <td>Фотінія</td>
          <td>Fenna</td>
          <td>Цілий рік - темно-зелений і яскраво-рожевий кольір, а навесні квітне кремовими квітами</td>
          <td>сонце, півтінь</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">6</th>
          <td>Гортензія волотиста</td>
          <td>Petite Star</td>
          <td>липень-жовтень</td>
          <td>сонце, півтінь</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">7</th>
          <td>Клематис</td>
          <td>Hanajima</td>
          <td>червень-вересень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">8</th>
          <td>Троянда шраб</td>
          <td>Барон Жиро де Лейн</td>
          <td>червень-жовтень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        <tr>
          <th scope=\"row\">9</th>
          <td>Бузина чорна</td>
          <td>Black Lace</td>
          <td>червень-липень</td>
          <td>сонце</td>
          <td>2-річний</td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>

<div class=\"row\">
    <h4 style=\"border-bottom: 2px solid #9f49b2;text-align: left\">
      Заиште свій відгук<br>
    </h4>
</div>

<form 
    data-request=\"onGetdata\"
    data-request-validate
    data-request-flash
    data-request-files
    class=\"row\">
    <div class=\"mb-3\">
      <label for=\"inputName\" class=\"form-label\">Ваше ім'я</label>
      <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"name\" placeholder=\"Name\">
      <div class=\"alert alert-danger\" data-validate-for=\"name\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Коментар</label>
      <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" name=\"text\"></textarea>
      <div class=\"alert alert-danger\" data-validate-for=\"text\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"text\" class=\"form-label\">Додайте Ваше фото</label>
      <input type=\"file\" class=\"form-control\" id=\"exampleFormControlInput1\" name=\"file_input\">
      <div class=\"alert alert-danger\" data-validate-for=\"text\"></div>
    </div>
    <div class=\"mb-3\">
    <button 
    data-request=\"onSaveBD\"
            data-request-flash
        type=\"submit\" class=\"btn btn-primary mb-3\">Надіслати відгук</button>
  </div>
</form>


<div class=\"row\" id =\"comments\">
    <h4 style=\"border-bottom: 2px solid #9f49b2;text-align: left\">
      Відгуки<br>
    </h4>
    <div class=\"col\">
    
        {% for comments in arrComments %}
            <div class=\"thumbnail\">
                <a target=\"_blank\">
                  <img src=\"{{ comments.image.path }}\" class=\"img-fluid\" alt=\"error\" style=\"width:100%\">
                  <div class=\"caption\">
                    <p> {{comments.comment}} </p>
                  </div>
                </a>
            </div>
        {%endfor%}
        
    </div>
    
    <style>
    .col {
    display: flex;
    overflow-x: scroll;
    -webkit-overflow-scrolling: touch; 
    scroll-behavior: smooth; 
    }
    .thumbnail {
      width: calc(100% / 3); 
      flex-shrink: 0; 
      margin-right: 10px;
    }
    
      .img-fluid {
      width: calc(100% / 3); 
      height: 200px; 
      }
    </style>
    
 </div>

  <div class=\"row\" style=\"position: center\">
    <div class=\"col-5\"> </div>
    <div class=\"col-2\" style=\"position: center\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\" style=\"margin:  5px 25% 5px 25%;\">
          <li class=\"page-item\"><a class=\"page-link\" href=\"../\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"../reviews\">2</a></li>
        </ul>
      </nav>
    </div>
    <div class=\"col-5\"> </div>
  </div>
</div>", "C:\\OSPanel\\domains\\project.loc/themes/test/pages/reviews.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 162);
        static $filters = array("theme" => 4, "escape" => 165);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['theme', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
