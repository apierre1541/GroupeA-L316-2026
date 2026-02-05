<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @EasyAdmin/crud/action.html.twig */
class __TwigTemplate_9fb53932f48c0aa8eeb5ef547df4add0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action.html.twig"));

        // line 4
        yield "
";
        // line 5
        $context["html_attributes"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 5, $this->source); })()), "htmlAttributes", [], "any", false, false, false, 5);
        // line 6
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "displayableConfirmationMessage", [], "any", false, false, false, 6))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "    ";
            $context["html_attributes"] = Twig\Extension\CoreExtension::merge((isset($context["html_attributes"]) || array_key_exists("html_attributes", $context) ? $context["html_attributes"] : (function () { throw new RuntimeError('Variable "html_attributes" does not exist.', 7, $this->source); })()), ["data-action-confirmation-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source,             // line 8
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "displayableConfirmationMessage", [], "any", false, false, false, 8))]);
        }
        // line 11
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()), "hasConfirmation", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "    ";
            $context["html_attributes"] = Twig\Extension\CoreExtension::merge((isset($context["html_attributes"]) || array_key_exists("html_attributes", $context) ? $context["html_attributes"] : (function () { throw new RuntimeError('Variable "html_attributes" does not exist.', 12, $this->source); })()), ["data-action-entity-name" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "crud", [], "any", false, true, false, 13), "entityLabelInSingular", [], "any", true, true, false, 13)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->ea(), "crud", [], "any", false, false, false, 13), "entityLabelInSingular", [], "any", false, false, false, 13), "")) : (""))), "data-action-entity-id" => ((CoreExtension::getAttribute($this->env, $this->source,             // line 14
($context["entity"] ?? null), "primaryKeyValueAsString", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 14, $this->source); })()), "primaryKeyValueAsString", [], "any", false, false, false, 14), "")) : (""))]);
            // line 16
            yield "    ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "confirmationButtonLabel", [], "any", false, false, false, 16))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "        ";
                $context["html_attributes"] = Twig\Extension\CoreExtension::merge((isset($context["html_attributes"]) || array_key_exists("html_attributes", $context) ? $context["html_attributes"] : (function () { throw new RuntimeError('Variable "html_attributes" does not exist.', 17, $this->source); })()), ["data-action-confirmation-button" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source,                 // line 18
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "confirmationButtonLabel", [], "any", false, false, false, 18))]);
                // line 20
                yield "    ";
            }
        }
        // line 22
        yield "
";
        // line 23
        $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
        $preRendered = $_v0->preRender("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "variant", [], "any", false, false, false, 23), "isInvisible" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "usesTextStyle", [], "any", false, false, false, 23), "class" => (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "isLink", [], "any", false, false, false, 23) && ((array_key_exists("isIncludedInDropdown", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isIncludedInDropdown"]) || array_key_exists("isIncludedInDropdown", $context) ? $context["isIncludedInDropdown"] : (function () { throw new RuntimeError('Variable "isIncludedInDropdown" does not exist.', 23, $this->source); })()), false)) : (false)))) ? ("dropdown-item") : ("")) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "cssClass", [], "any", false, false, false, 23)), "htmlAttributes" => (isset($context["html_attributes"]) || array_key_exists("html_attributes", $context) ? $context["html_attributes"] : (function () { throw new RuntimeError('Variable "html_attributes" does not exist.', 23, $this->source); })()), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "type" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "buttonType", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), "icon" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "icon", [], "any", false, false, false, 23), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "isLink", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "linkUrl", [], "any", false, false, false, 23)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "isForm", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "linkUrl", [], "any", false, false, false, 23)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "isForm", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null))]));
        if (null !== $preRendered) {
            yield $preRendered; 
        } else {
            $preRenderEvent = $_v0->startEmbedComponent("ea:Button", Twig\Extension\CoreExtension::toArray(["variant" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "variant", [], "any", false, false, false, 23), "isInvisible" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "usesTextStyle", [], "any", false, false, false, 23), "class" => (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "isLink", [], "any", false, false, false, 23) && ((array_key_exists("isIncludedInDropdown", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["isIncludedInDropdown"]) || array_key_exists("isIncludedInDropdown", $context) ? $context["isIncludedInDropdown"] : (function () { throw new RuntimeError('Variable "isIncludedInDropdown" does not exist.', 23, $this->source); })()), false)) : (false)))) ? ("dropdown-item") : ("")) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "cssClass", [], "any", false, false, false, 23)), "htmlAttributes" => (isset($context["html_attributes"]) || array_key_exists("html_attributes", $context) ? $context["html_attributes"] : (function () { throw new RuntimeError('Variable "html_attributes" does not exist.', 23, $this->source); })()), "htmlElement" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "type" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "buttonType", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), "icon" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "icon", [], "any", false, false, false, 23), "href" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "isLink", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "linkUrl", [], "any", false, false, false, 23)) : (null)), "action" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "isForm", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "linkUrl", [], "any", false, false, false, 23)) : (null)), "method" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "htmlElement", [], "any", false, false, false, 23), "isForm", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("POST") : (null))]), $context, "@EasyAdmin/crud/action.html.twig", 34885036451);
            $embeddedContext = $preRenderEvent->getVariables();
            $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
            $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
            $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 34885036451);
            $this->load("@EasyAdmin/crud/action.html.twig", 23, "34885036451")->display($embeddedContext, $embeddedBlocks);
            $_v0->finishEmbedComponent();
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  80 => 23,  77 => 22,  73 => 20,  71 => 18,  69 => 17,  66 => 16,  64 => 14,  62 => 12,  60 => 11,  57 => 8,  55 => 7,  53 => 6,  51 => 5,  48 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var action \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}

{% set html_attributes = action.htmlAttributes %}
{% if action.displayableConfirmationMessage is not null %}
    {% set html_attributes = html_attributes|merge({
        'data-action-confirmation-message': action.displayableConfirmationMessage|trans,
    }) %}
{% endif %}
{% if action.hasConfirmation %}
    {% set html_attributes = html_attributes|merge({
        'data-action-entity-name': ea().crud.entityLabelInSingular|default('')|trans,
        'data-action-entity-id': entity.primaryKeyValueAsString|default(''),
    }) %}
    {% if action.confirmationButtonLabel is not null %}
        {% set html_attributes = html_attributes|merge({
            'data-action-confirmation-button': action.confirmationButtonLabel|trans,
        }) %}
    {% endif %}
{% endif %}

{% component 'ea:Button' with { variant: (action.variant), isInvisible: (action.usesTextStyle), class: (action.htmlElement.isLink and isIncludedInDropdown|default(false) ? 'dropdown-item')~' '~(action.cssClass), htmlAttributes: (html_attributes), htmlElement: (action.htmlElement), type: (action.buttonType.value), icon: (action.icon), href: (action.htmlElement.isLink ? action.linkUrl : null), action: (action.htmlElement.isForm ? action.linkUrl : null), method: (action.htmlElement.isForm ? 'POST' : null) } %}
    {% block content %}{% set action_label = outerScope.action.label|trans %}
    {%- if action_label is not empty -%}<span class=\"action-label\">{{ action_label|raw }}</span>{%- endif -%}
{% endblock %}{% endcomponent %}
", "@EasyAdmin/crud/action.html.twig", "C:\\Users\\campus\\Documents\\UE L316 - Symfony\\GroupeA-L316-2026\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action.html.twig");
    }
}


/* @EasyAdmin/crud/action.html.twig */
class __TwigTemplate_9fb53932f48c0aa8eeb5ef547df4add0___34885036451 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 23, $this->source); })()), 23);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/action.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $context["action_label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["outerScope"]) || array_key_exists("outerScope", $context) ? $context["outerScope"] : (function () { throw new RuntimeError('Variable "outerScope" does not exist.', 24, $this->source); })()), "action", [], "any", false, false, false, 24), "label", [], "any", false, false, false, 24));
        // line 25
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["action_label"]) || array_key_exists("action_label", $context) ? $context["action_label"] : (function () { throw new RuntimeError('Variable "action_label" does not exist.', 25, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span class=\"action-label\">";
            yield (isset($context["action_label"]) || array_key_exists("action_label", $context) ? $context["action_label"] : (function () { throw new RuntimeError('Variable "action_label" does not exist.', 25, $this->source); })());
            yield "</span>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/action.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  239 => 25,  225 => 24,  80 => 23,  77 => 22,  73 => 20,  71 => 18,  69 => 17,  66 => 16,  64 => 14,  62 => 12,  60 => 11,  57 => 8,  55 => 7,  53 => 6,  51 => 5,  48 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var action \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\ActionDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}

{% set html_attributes = action.htmlAttributes %}
{% if action.displayableConfirmationMessage is not null %}
    {% set html_attributes = html_attributes|merge({
        'data-action-confirmation-message': action.displayableConfirmationMessage|trans,
    }) %}
{% endif %}
{% if action.hasConfirmation %}
    {% set html_attributes = html_attributes|merge({
        'data-action-entity-name': ea().crud.entityLabelInSingular|default('')|trans,
        'data-action-entity-id': entity.primaryKeyValueAsString|default(''),
    }) %}
    {% if action.confirmationButtonLabel is not null %}
        {% set html_attributes = html_attributes|merge({
            'data-action-confirmation-button': action.confirmationButtonLabel|trans,
        }) %}
    {% endif %}
{% endif %}

{% component 'ea:Button' with { variant: (action.variant), isInvisible: (action.usesTextStyle), class: (action.htmlElement.isLink and isIncludedInDropdown|default(false) ? 'dropdown-item')~' '~(action.cssClass), htmlAttributes: (html_attributes), htmlElement: (action.htmlElement), type: (action.buttonType.value), icon: (action.icon), href: (action.htmlElement.isLink ? action.linkUrl : null), action: (action.htmlElement.isForm ? action.linkUrl : null), method: (action.htmlElement.isForm ? 'POST' : null) } %}
    {% block content %}{% set action_label = outerScope.action.label|trans %}
    {%- if action_label is not empty -%}<span class=\"action-label\">{{ action_label|raw }}</span>{%- endif -%}
{% endblock %}{% endcomponent %}
", "@EasyAdmin/crud/action.html.twig", "C:\\Users\\campus\\Documents\\UE L316 - Symfony\\GroupeA-L316-2026\\vendor\\easycorp\\easyadmin-bundle\\templates\\crud\\action.html.twig");
    }
}
