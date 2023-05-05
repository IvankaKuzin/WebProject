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

/* C:\OSPanel\domains\project.loc/themes/test/pages/home.htm */
class __TwigTemplate_28c1800fe2840c8d559363326393c3edd44409bcc517680139cf76e632666c13 extends \Twig\Template
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
    <div class=\"col-sm-2\" style=\"text-shadow: 1px 1px 2px #60b70b, 0 0 25px blue, 0 0 5px darkblue;
                     font-family: 'Arial Black'; text-align: right\">
      Columbia, MO<br>
      Open April 2, 2023
    </div>
  </div>

  <div class=\"row\" style=\"background-color: #4a025d; \">
    <div class=\"col-sm-12\">
      <p>
      <p style=\"color: #f8fcff\">
        Здійсніть пошук у нашій чудовій базі даних рослин зараз, щоб отримати щоденні оновлення нашого асортименту
        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"button\">
          Переглянути частину бази даних
        </button>
      </p>
      </p>
    </div>
  </div>

  <div class=\"row\">
    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
      <div class=\"container-fluid\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\"
                 aria-expanded=\"false\">
                Посилання на розділи сайту
              </a>
              <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"#scrollZruch\">Зручність</a></li>
                <li><a class=\"dropdown-item\" href=\"#scrollSut\">Суть садівництва</a></li>
                <li><a class=\"dropdown-item\" href=\"#scrollGarant\">Гарантія</a></li>
                <li><a class=\"dropdown-item\" href=\"#scrollMap\">Карта</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"#scrollspyKontact\">Контакти</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

<form 
    data-request=\"onGetdata\"
    data-request-validate
    data-request-flash
    class=\"row\">
    <div class=\"mb-3\">
      <label for=\"inputName\" class=\"form-label\">Ім'я</label>
      <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"name\" placeholder=\"Name\">
      <div class=\"alert alert-danger\" data-validate-for=\"name\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"exampleFormControlInput1\" class=\"form-label\">Електронна адраса</label>
      <input type=\"text\" class=\"form-control\" id=\"exampleFormControlInput1\" name=\"email\" placeholder=\"name@example.com\">
      <div class=\"alert alert-danger\" data-validate-for=\"email\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Вкажіть, що бажаєте придбати</label>
      <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" name=\"text\"></textarea>
      <div class=\"alert alert-danger\" data-validate-for=\"text\"></div>
    </div>
    <div class=\"mb-3\">
    <button 
        type=\"submit\" class=\"btn btn-primary mb-3\">Зберегти дані</button>
    <button 
            data-request=\"onFile\"
            data-request-flash
            class=\"btn btn-primary mb-3\">Зберегти у файлі</button>
    <button 
            data-request=\"onMail\"
            data-request-flash
            class=\"btn btn-primary mb-3\">Надіслати листа</button>
  </div>
</form>

  <div class=\"row\">
    <p style=\"margin: 10px\">
      <a class=\"btn btn-primary\" data-bs-toggle=\"collapse\" href=\"#multiCollapseExample1\"
         role=\"button\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample1\">
        Карта зображень</a>
    </p>
    <div class=\"row\">
      <div class=\"collapse\" id=\"multiCollapseExample1\">
        <div class=\"card card-group overflow-auto\" style=\"min-width: 600px;\">

            ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["arrNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 98
            echo "                <div class=\"card\" style=\"margin: 10px\">
                      <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["news"], "image", [], "any", false, false, true, 99), "path", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"not img\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 101
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "title", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\" style=\"text-align: justify;\">
                          ";
            // line 103
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["news"], "text", [], "any", false, false, true, 103), 103, $this->source), "html", null, true);
            echo "</p>
                        <a href=\"Reviews.html\" class=\"btn btn-primary\">
                          Дізнатись детальніше
                        </a>
                      </div>
                    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "
            

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\" style=\"height: 60px\">
    <div class=\"col-sm-12\">
      <img src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Hand-drawn.png");
        echo "\">
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-2\"> </div>
    <div class=\"col-sm-4\" style=\"text-align: right\">
      <img src=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/Garden.jpg");
        echo "\">
    </div>
    <div class=\"col-sm-4\">
      <h4 style=\"border-bottom: 2px solid #9d0d12;text-align: left\">
        Рішення високого рівня для вирощування вашого саду<br>
      </h4>
      <p style=\"text-align: left\">Зараз відкритий сезон. Відвідайте наш прекрасний центр,
        щоб перейти до одного з найбільших і унікальних колекцій кущів і квітів в Mid-Missouri.
        Наші параметри віртуального пошуку роблять вибір інвентарю безпроблемним процесом.</p>
    </div>
    <div class=\"col-sm-2\"> </div>
  </div>

  <div class=\"row\" style=\"height: 10px\">
    <div class=\"col-sm-12\">
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-12\">
      <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"button\">
        Перегляньте наші роботи
      </button>
    </div>
  </div>

  <div class=\"row\" style=\"height: 10px\">
    <div class=\"col-sm-12\">
    </div>
  </div>

  <div class=\"row\" style=\"height: 250px; background-image: url('";
        // line 158
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/peradeniya.jpg");
        echo "')\">
    <div class=\"col\"> </div>
    <div class=\"col\">
      <div class=\"translucent-block\" style=\"position: center; top: 3%; height: auto;
                                     background-color: rgba(255, 255, 255, 0.7);
                                     margin: 10% 0 10% 0;\">
        <h4 id=\"scrollZruch\" style=\"color: rgba(57,124,11,0.76)\">Зручно Близько Дому</h4>
        <p>15 акрів землі, наповненої розкиданими оранжереями та декораціями.
          У цьому районі розташовано кілька популярних місцевих пам’яток, розташованих поруч із
          підрозділами Rost, що залишилися, і Midway Antique Mall.</p>
      </div>
    </div>
    <div class=\"col\"> </div>
  </div>

  <div class=\"row\" style=\"height: 20px; background-color: #a6d968\">
    <div class=\"col-sm-12\"> </div>
  </div>

  <div class=\"row\" style=\"background-color: #a6d968\">
    <div class=\"col-sm-2\"> </div>
    <div class=\"col-sm-4\" style=\"text-align: right\">
      <img src=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sunflower.jpg");
        echo "\">
    </div>
    <div class=\"col-sm-4\" style=\"text-align: left\">
      <h4 id=\"scrollSut\" style=\"color: #9d0d12\">
        Суть садівництва
      </h4>
      <p>
        Нам подобається можливість привнести трохи яскравості в будь-який сад. Виберіть із нашого розмаїття
        візуальних реквізитів на відкритому повітрі, включаючи кераміку та кам’яні скульптури, або принесіть
        свої контейнери для індивідуального дизайну.
      </p>
    </div>
    <div class=\"col-sm-2\"> </div>
  </div>

  <div class=\"row\" style=\"height: 20px; background-color: #a6d968\">
    <div class=\"col-sm-12\"> </div>
  </div>

  <div class=\"row\" style=\"background-color: #a6d968\">
    <div class=\"col-sm-4\"> </div>
    <div class=\"col-sm-3\" style=\"position: relative; top: 25%; text-align: left\">
      <h4 id=\"scrollGarant\">
        Довічна гарантія
      </h4>
      <p>
        Ми обіцяємо вам висококваліфікований догляд за вашими деревами та квітами, великими чи маленькими,
        незалежно від того, скільки часу пройшло після покупки.
      </p>
      <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"button\">
        Перегляньте наші роботи
      </button>
    </div>
    <div class=\"col-sm-3\" style=\"text-align: center\">
      <img src=\"";
        // line 214
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/14064.jpg");
        echo "\">
    </div>
    <div class=\"col-sm-2\"> </div>
  </div>

  <div class=\"row\" style=\"height: 20px; background-color: #a6d968\">
    <div class=\"col-sm-12\"> </div>
  </div>

  <div class=\"row\" style=\"position: center\">
    <div class=\"col-5\"> </div>
    <div class=\"col-2\" style=\"position: center\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\" style=\"margin:  10px 25% 5px 25% ;\">
          <li class=\"page-item\"><a class=\"page-link\" href=\"../\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"../reviews\">2</a></li>
        </ul>
      </nav>
    </div>
    <div class=\"col-5\"> </div>
  </div>

  <div class=\"row\" id=\"scrollMap\" style=\"height: 320px; width: 100%; margin: 5px 0 10px 0\">
      <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1587.234037889181!2d24.00389048912967!3d49.82541686811731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae781441b3fab%3A0x7d0b898583ebe1ee!2z0J3QsNGG0ZbQvtC90LDQu9GM0L3QuNC5INC70ZbRgdC-0YLQtdGF0L3RltGH0L3QuNC5INGD0L3RltCy0LXRgNGB0LjRgtC10YIg0KPQutGA0LDRl9C90Lg!5e0!3m2!1suk!2sua!4v1679599740005!5m2!1suk!2sua\"
      style=\"width: 100%;\"></iframe>
  </div>

  <div class=\"row\" style=\"background-color: #771b1b; color: #ffffff\">
    <div class=\"col-sm-12\" id=\"scrollspyKontact\">
      Blast Landscaping Ire. Покращений садовий центр<br>
      245 Trails West Ave<br>
      Columbia MO 65202
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\OSPanel\\domains\\project.loc/themes/test/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 214,  251 => 180,  226 => 158,  192 => 127,  182 => 120,  170 => 110,  157 => 103,  152 => 101,  147 => 99,  144 => 98,  140 => 97,  44 => 4,  39 => 1,);
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
    <div class=\"col-sm-2\" style=\"text-shadow: 1px 1px 2px #60b70b, 0 0 25px blue, 0 0 5px darkblue;
                     font-family: 'Arial Black'; text-align: right\">
      Columbia, MO<br>
      Open April 2, 2023
    </div>
  </div>

  <div class=\"row\" style=\"background-color: #4a025d; \">
    <div class=\"col-sm-12\">
      <p>
      <p style=\"color: #f8fcff\">
        Здійсніть пошук у нашій чудовій базі даних рослин зараз, щоб отримати щоденні оновлення нашого асортименту
        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"button\">
          Переглянути частину бази даних
        </button>
      </p>
      </p>
    </div>
  </div>

  <div class=\"row\">
    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
      <div class=\"container-fluid\">
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\"
                 aria-expanded=\"false\">
                Посилання на розділи сайту
              </a>
              <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"#scrollZruch\">Зручність</a></li>
                <li><a class=\"dropdown-item\" href=\"#scrollSut\">Суть садівництва</a></li>
                <li><a class=\"dropdown-item\" href=\"#scrollGarant\">Гарантія</a></li>
                <li><a class=\"dropdown-item\" href=\"#scrollMap\">Карта</a></li>
                <li><hr class=\"dropdown-divider\"></li>
                <li><a class=\"dropdown-item\" href=\"#scrollspyKontact\">Контакти</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

<form 
    data-request=\"onGetdata\"
    data-request-validate
    data-request-flash
    class=\"row\">
    <div class=\"mb-3\">
      <label for=\"inputName\" class=\"form-label\">Ім'я</label>
      <input type=\"text\" class=\"form-control\" id=\"inputName\" name=\"name\" placeholder=\"Name\">
      <div class=\"alert alert-danger\" data-validate-for=\"name\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"exampleFormControlInput1\" class=\"form-label\">Електронна адраса</label>
      <input type=\"text\" class=\"form-control\" id=\"exampleFormControlInput1\" name=\"email\" placeholder=\"name@example.com\">
      <div class=\"alert alert-danger\" data-validate-for=\"email\"></div>
    </div>
    <div class=\"mb-3\">
      <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Вкажіть, що бажаєте придбати</label>
      <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" name=\"text\"></textarea>
      <div class=\"alert alert-danger\" data-validate-for=\"text\"></div>
    </div>
    <div class=\"mb-3\">
    <button 
        type=\"submit\" class=\"btn btn-primary mb-3\">Зберегти дані</button>
    <button 
            data-request=\"onFile\"
            data-request-flash
            class=\"btn btn-primary mb-3\">Зберегти у файлі</button>
    <button 
            data-request=\"onMail\"
            data-request-flash
            class=\"btn btn-primary mb-3\">Надіслати листа</button>
  </div>
</form>

  <div class=\"row\">
    <p style=\"margin: 10px\">
      <a class=\"btn btn-primary\" data-bs-toggle=\"collapse\" href=\"#multiCollapseExample1\"
         role=\"button\" aria-expanded=\"false\" aria-controls=\"multiCollapseExample1\">
        Карта зображень</a>
    </p>
    <div class=\"row\">
      <div class=\"collapse\" id=\"multiCollapseExample1\">
        <div class=\"card card-group overflow-auto\" style=\"min-width: 600px;\">

            {% for news in arrNews %}
                <div class=\"card\" style=\"margin: 10px\">
                      <img src=\"{{ news.image.path }}\" class=\"card-img-top\" alt=\"not img\">
                      <div class=\"card-body\">
                        <h5 class=\"card-title\">{{news.title}}</h5>
                        <p class=\"card-text\" style=\"text-align: justify;\">
                          {{news.text}}</p>
                        <a href=\"Reviews.html\" class=\"btn btn-primary\">
                          Дізнатись детальніше
                        </a>
                      </div>
                    </div>
            {%endfor%}

            

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\" style=\"height: 60px\">
    <div class=\"col-sm-12\">
      <img src=\"{{ 'assets/images/Hand-drawn.png'|theme }}\">
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-2\"> </div>
    <div class=\"col-sm-4\" style=\"text-align: right\">
      <img src=\"{{ 'assets/images/Garden.jpg'|theme }}\">
    </div>
    <div class=\"col-sm-4\">
      <h4 style=\"border-bottom: 2px solid #9d0d12;text-align: left\">
        Рішення високого рівня для вирощування вашого саду<br>
      </h4>
      <p style=\"text-align: left\">Зараз відкритий сезон. Відвідайте наш прекрасний центр,
        щоб перейти до одного з найбільших і унікальних колекцій кущів і квітів в Mid-Missouri.
        Наші параметри віртуального пошуку роблять вибір інвентарю безпроблемним процесом.</p>
    </div>
    <div class=\"col-sm-2\"> </div>
  </div>

  <div class=\"row\" style=\"height: 10px\">
    <div class=\"col-sm-12\">
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-sm-12\">
      <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"button\">
        Перегляньте наші роботи
      </button>
    </div>
  </div>

  <div class=\"row\" style=\"height: 10px\">
    <div class=\"col-sm-12\">
    </div>
  </div>

  <div class=\"row\" style=\"height: 250px; background-image: url('{{ 'assets/images/peradeniya.jpg'|theme }}')\">
    <div class=\"col\"> </div>
    <div class=\"col\">
      <div class=\"translucent-block\" style=\"position: center; top: 3%; height: auto;
                                     background-color: rgba(255, 255, 255, 0.7);
                                     margin: 10% 0 10% 0;\">
        <h4 id=\"scrollZruch\" style=\"color: rgba(57,124,11,0.76)\">Зручно Близько Дому</h4>
        <p>15 акрів землі, наповненої розкиданими оранжереями та декораціями.
          У цьому районі розташовано кілька популярних місцевих пам’яток, розташованих поруч із
          підрозділами Rost, що залишилися, і Midway Antique Mall.</p>
      </div>
    </div>
    <div class=\"col\"> </div>
  </div>

  <div class=\"row\" style=\"height: 20px; background-color: #a6d968\">
    <div class=\"col-sm-12\"> </div>
  </div>

  <div class=\"row\" style=\"background-color: #a6d968\">
    <div class=\"col-sm-2\"> </div>
    <div class=\"col-sm-4\" style=\"text-align: right\">
      <img src=\"{{ 'assets/images/sunflower.jpg'|theme }}\">
    </div>
    <div class=\"col-sm-4\" style=\"text-align: left\">
      <h4 id=\"scrollSut\" style=\"color: #9d0d12\">
        Суть садівництва
      </h4>
      <p>
        Нам подобається можливість привнести трохи яскравості в будь-який сад. Виберіть із нашого розмаїття
        візуальних реквізитів на відкритому повітрі, включаючи кераміку та кам’яні скульптури, або принесіть
        свої контейнери для індивідуального дизайну.
      </p>
    </div>
    <div class=\"col-sm-2\"> </div>
  </div>

  <div class=\"row\" style=\"height: 20px; background-color: #a6d968\">
    <div class=\"col-sm-12\"> </div>
  </div>

  <div class=\"row\" style=\"background-color: #a6d968\">
    <div class=\"col-sm-4\"> </div>
    <div class=\"col-sm-3\" style=\"position: relative; top: 25%; text-align: left\">
      <h4 id=\"scrollGarant\">
        Довічна гарантія
      </h4>
      <p>
        Ми обіцяємо вам висококваліфікований догляд за вашими деревами та квітами, великими чи маленькими,
        незалежно від того, скільки часу пройшло після покупки.
      </p>
      <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"button\">
        Перегляньте наші роботи
      </button>
    </div>
    <div class=\"col-sm-3\" style=\"text-align: center\">
      <img src=\"{{ 'assets/images/14064.jpg'|theme }}\">
    </div>
    <div class=\"col-sm-2\"> </div>
  </div>

  <div class=\"row\" style=\"height: 20px; background-color: #a6d968\">
    <div class=\"col-sm-12\"> </div>
  </div>

  <div class=\"row\" style=\"position: center\">
    <div class=\"col-5\"> </div>
    <div class=\"col-2\" style=\"position: center\">
      <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination\" style=\"margin:  10px 25% 5px 25% ;\">
          <li class=\"page-item\"><a class=\"page-link\" href=\"../\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"../reviews\">2</a></li>
        </ul>
      </nav>
    </div>
    <div class=\"col-5\"> </div>
  </div>

  <div class=\"row\" id=\"scrollMap\" style=\"height: 320px; width: 100%; margin: 5px 0 10px 0\">
      <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1587.234037889181!2d24.00389048912967!3d49.82541686811731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae781441b3fab%3A0x7d0b898583ebe1ee!2z0J3QsNGG0ZbQvtC90LDQu9GM0L3QuNC5INC70ZbRgdC-0YLQtdGF0L3RltGH0L3QuNC5INGD0L3RltCy0LXRgNGB0LjRgtC10YIg0KPQutGA0LDRl9C90Lg!5e0!3m2!1suk!2sua!4v1679599740005!5m2!1suk!2sua\"
      style=\"width: 100%;\"></iframe>
  </div>

  <div class=\"row\" style=\"background-color: #771b1b; color: #ffffff\">
    <div class=\"col-sm-12\" id=\"scrollspyKontact\">
      Blast Landscaping Ire. Покращений садовий центр<br>
      245 Trails West Ave<br>
      Columbia MO 65202
    </div>
  </div>
</div>", "C:\\OSPanel\\domains\\project.loc/themes/test/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 97);
        static $filters = array("theme" => 4, "escape" => 99);
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
