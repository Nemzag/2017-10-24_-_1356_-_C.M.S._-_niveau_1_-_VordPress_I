<?php

/* settings/mta.html */
class __TwigTemplate_b092663685ddb17db52760292ec6c346d809570d8595b45d20eb15b99886ace2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["intervals"] = array(0 => 1, 1 => 2, 2 => 5, 3 => 10, 4 => 15, 5 => 30);
        // line 2
        $context["default_frequency"] = array("website" => array("emails" => 25, "interval" => 5), "smtp" => array("emails" => 100, "interval" => 5));
        // line 12
        echo "
<!-- mta: group -->
<input
  type=\"hidden\"
  id=\"mta_group\"
  name=\"mta_group\"
  value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mailpoet_smtp_provider\"
  name=\"mailpoet_smtp_provider\"
  value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()), "html", null, true);
        echo "\"
/>
<!-- mta: method -->
<input
  type=\"hidden\"
  id=\"mta_method\"
  name=\"mta[method]\"
  value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "method", array()), "html", null, true);
        echo "\"
/>

<!-- mta: sending frequency -->
<input
  type=\"hidden\"
  id=\"mta_frequency_emails\"
  name=\"mta[frequency][emails]\"
  value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
        echo "\"
/>
<input
  type=\"hidden\"
  id=\"mta_frequency_interval\"
  name=\"mta[frequency][interval]\"
  value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()), "html", null, true);
        echo "\"
/>

<!-- mta: mailpoet sending service key -->
<input
  type=\"hidden\"
  id=\"mailpoet_api_key\"
  name=\"mta[mailpoet_api_key]\"
  value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "mailpoet_api_key", array()), "html", null, true);
        echo "\"
/>

<!-- smtp: available sending methods -->
<ul class=\"mailpoet_sending_methods\">
  <li
    data-group=\"mailpoet\"
    ";
        // line 60
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet")) {
            echo "class=\"mailpoet_active\"";
        }
        // line 61
        echo "  >
    <div class=\"mailpoet_sending_method_description\">
      <h3>
        ";
        // line 64
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("MailPoet Sending Service");
        echo "
      </h3>

      <p
        class=\"mailpoet_description";
        // line 68
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
        id=\"mailpoet_sending_method_active_text\"
      >
        <strong>";
        // line 71
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You're now sending with MailPoet!");
        echo "</strong>
        <br />
        ";
        // line 73
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Great, you're all set up. Your emails will now be sent quickly and reliably!");
        echo "
      </p>

      <div
        class=\"mailpoet_description";
        // line 77
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet")) {
            echo " mailpoet_hidden";
        }
        echo "\"
        id=\"mailpoet_sending_method_inactive_text\"
      >
        <strong>";
        // line 80
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Solve all of your sending problems!");
        echo "</strong>

        <ul class=\"sending-method-benefits mailpoet_success\">
          <li class=\"mailpoet_success_item\">";
        // line 83
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reach the inbox, not the spam box.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 84
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Super fast: send up to 50,000 emails per hour.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 85
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("All emails are signed with SPF & DKIM.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 86
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Automatically remove invalid and bounced addresses (bounce handling) to keep your lists clean.");
        echo "
          <li class=\"mailpoet_success_item\">";
        // line 87
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configuration is dead-simple: simply enter a key to activate the sending service.");
        echo "
          <li class=\"mailpoet_success_item\"><strong>";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Plus:");
        echo "</strong> ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("get the Premium features for free.");
        echo "
        </li>
        </ul>
        <a
          href=\"";
        // line 92
        echo admin_url("admin.php?page=mailpoet-premium");
        echo "\"
          class=\"button button-primary\"
          target=\"_blank\"
        >";
        // line 95
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Find out more about our monthly plans");
        echo "</a>

        <a href=\"https://www.mailpoet.com/free-plan/\" class=\"button button-primary sending-free-plan-button\" target=\"_blank\">
          <strong>";
        // line 98
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("new!");
        echo "</strong> ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Try it for free (for up to 2,000 subscribers)");
        echo "
        </a>
      </div>
    </div>
    <div class=\"mailpoet_status\">
      <span>";
        // line 103
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>

      <div class=\"mailpoet_actions\">
        <button
          type=\"button\"
          class=\"mailpoet_sending_service_activate button-secondary\"
        ";
        // line 109
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "mailpoet") ||  !(isset($context["mss_key_valid"]) ? $context["mss_key_valid"] : null))) {
            echo " disabled=\"disabled\"";
        }
        // line 110
        echo "        >";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</button>
      </div>
    </div>

  </li>
  <li
    data-group=\"other\"
    ";
        // line 117
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "website"))) {
            echo "class=\"mailpoet_active\"";
        }
        // line 118
        echo "  >
    <div class=\"mailpoet_sending_method_description\">
      <h3>";
        // line 120
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Other");
        echo "</h3>
      <div class=\"mailpoet_description\">
        <strong>";
        // line 122
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send emails via your host (not recommended!) or via a third-party sender.");
        echo "</strong>
        <ul class=\"sending-method-benefits mailpoet_error\">
          <li class=\"mailpoet_error_item\">";
        // line 124
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unless you're a pro, you’ll probably end up in spam.");
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 125
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending speed is limited by your host and/or your third-party (with a 2,000 per hour maximum).");
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 126
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manual configuration of SPF and DKIM required.");
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 127
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Bounce handling is available, but only with an extra [link]add-on[/link]."), "https://wordpress.org/plugins/bounce-handler-mailpoet/", array("target" => "_blank"));
        // line 131
        echo "
          <li class=\"mailpoet_error_item\">";
        // line 132
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("You’ll need a separate plugin to send your WordPress site emails (optional).");
        echo "
        </ul>
      </div>
    </div>
    <div class=\"mailpoet_status\">
      <span>";
        // line 137
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activated");
        echo "</span>
      <div class=\"mailpoet_actions\">
        <a
          class=\"button-secondary\"
          href=\"#mta/other\">";
        // line 141
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Configure");
        echo "</a>
      </div>
    </div>
  </li>
</ul>

<p class=\"mailpoet_sending_methods_help help\">
  ";
        // line 148
        echo MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Need help to pick? [link]Check out the comparison table of sending methods[/link]."), "http://beta.docs.mailpoet.com/article/181-comparison-table-of-sending-methods", array("target" => "_blank"));
        // line 151
        echo "
</p>

<div id=\"mailpoet_sending_method_setup\">

  <!-- Sending Method: Other -->
  <div class=\"mailpoet_sending_method\" data-group=\"other\" style=\"display:none;\">
    <table class=\"form-table\">
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_smtp_method\">
            ";
        // line 162
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Method");
        echo "
          </label>
        </th>
        <td>
          <!-- smtp provider -->
          <select
            id=\"mailpoet_smtp_method\"
            name=\"smtp_provider\"
          >
            <option data-interval=\"5\" data-emails=\"25\" value=\"server\">
              ";
        // line 172
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host / web server");
        echo "
            </option>
            <option data-interval=\"5\" data-emails=\"100\" value=\"manual\"
              ";
        // line 176
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 178
            echo "              selected=\"selected\"
              ";
        }
        // line 180
        echo "            >
              ";
        // line 181
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP");
        echo "
            </option>
            <!-- providers -->
            <optgroup label=\"";
        // line 184
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Select your provider");
        echo "\">
              ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 186
            echo "              <option
                value=\"";
            // line 187
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                data-emails=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                data-interval=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
                data-fields=\"";
            // line 190
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["host"], "fields", array()), ","), "html", null, true);
            echo "\"
              ";
            // line 191
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) == $context["host_key"])) {
                // line 192
                echo "              selected=\"selected\"
              ";
            }
            // line 194
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "            </optgroup>
          </select>
        </td>
      </tr>
      <tr id=\"mailpoet_sending_method_host\"
        ";
        // line 202
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 204
            echo "        style=\"display:none;\"
        ";
        }
        // line 206
        echo "      >
        <th scope=\"row\">
          <label for=\"mailpoet_web_host\">
            ";
        // line 209
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your web host");
        echo "
          </label>
        </th>
        <td>
          <p>
            <!-- sending frequency -->
            <select
              id=\"mailpoet_web_host\"
              name=\"web_host\"
            >

              <!-- web hosts -->
              <option
                value=\"manual\"
                data-emails=\"25\"
                data-interval=\"5\"
                label=\"";
        // line 225
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Not listed (default)");
        echo "\"
              >
              ";
        // line 227
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "web", array()));
        foreach ($context['_seq'] as $context["host_key"] => $context["host"]) {
            // line 228
            echo "              <option
                value=\"";
            // line 229
            echo twig_escape_filter($this->env, $context["host_key"], "html", null, true);
            echo "\"
                data-emails=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "emails", array()), "html", null, true);
            echo "\"
                data-interval=\"";
            // line 231
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "interval", array()), "html", null, true);
            echo "\"
              ";
            // line 232
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "web_host", array()) == $context["host_key"])) {
                // line 233
                echo "              selected=\"selected\"
              ";
            }
            // line 235
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["host"], "name", array()), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['host_key'], $context['host'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "            </select>
          </p>

        </td>
      </tr>
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_web_host\">
            ";
        // line 245
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Sending frequency");
        echo "
          </label>
        </th>
        <td>
          <p>
            <!-- sending frequency -->
            <select
              id=\"mailpoet_sending_frequency\"
              name=\"mailpoet_sending_frequency\"
            >
              <option value=\"auto\">
                ";
        // line 256
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Recommended");
        echo "
              </option>
              <option value=\"manual\"
                ";
        // line 260
        if ( !($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mailpoet_sending_frequency", array()) == "auto")) {
            // line 262
            echo "                selected=\"selected\"
                ";
        }
        // line 264
        echo "              >
                ";
        // line 265
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("I'll set my own frequency");
        echo "
              </option>
            </select>
            <span id=\"mailpoet_recommended_daily_emails\"></span>
          </p>
          <div id=\"mailpoet_sending_frequency_manual\"
            ";
        // line 272
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mailpoet_sending_frequency", array()) == "auto")) {
            // line 274
            echo "              style=\"display: none\"
            ";
        }
        // line 276
        echo "          >
            <p>
              <input
                id=\"other_frequency_emails\"
                type=\"number\"
                min=\"1\"
                max=\"1000\"
              ";
        // line 283
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array())) {
            // line 284
            echo "                value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "emails", array()), "html", null, true);
            echo "\"
              ";
        } else {
            // line 286
            echo "                value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
            echo "\"
              ";
        }
        // line 288
        echo "              />
              ";
        // line 289
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("emails");
        echo "
              <select id=\"other_frequency_interval\">
                ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["intervals"]) ? $context["intervals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["interval"]) {
            // line 292
            echo "                <option
                  value=\"";
            // line 293
            echo twig_escape_filter($this->env, $context["interval"], "html", null, true);
            echo "\"
                ";
            // line 295
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) && (            // line 296
$context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array())))) {
                // line 298
                echo "                selected=\"selected\"
                ";
            }
            // line 300
            echo "                ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "frequency", array()), "interval", array()) == $context["interval"])) {
                // line 301
                echo "                selected=\"selected\"
                ";
            }
            // line 303
            echo "                >
                ";
            // line 304
            echo $this->env->getExtension('MailPoet\Twig\Functions')->getSendingFrequency($context["interval"]);
            echo "
                ";
            // line 305
            if (($context["interval"] == $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()))) {
                // line 306
                echo "                (";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("recommended");
                echo ")
                ";
            }
            // line 308
            echo "                </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "              </select>
              <span id=\"mailpoet_other_daily_emails\"></span>
            </p>
            <br />
            <p>
              ";
        // line 315
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("<strong>Warning!</strong> You may break the terms of your web host or provider by sending more than the recommended emails per day. Contact your host if you want to send more.");
        echo "
            </p>
          </div>
        </td>
      </tr>
      <tr class=\"mailpoet_smtp_field\" data-field=\"host\"
        ";
        // line 322
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 324
            echo "        style=\"display:none;\"
        ";
        }
        // line 326
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_host]\">
            ";
        // line 329
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Hostname");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 332
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("e.g.: smtp.mydomain.com");
        echo "
          </p>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_host]\"
            name=\"mta[host]\"
            value=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "host", array()), "html", null, true);
        echo "\" />
        </td>
      </tr>
      <!-- smtp: port -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"port\"
        ";
        // line 347
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 349
            echo "        style=\"display:none;\"
        ";
        }
        // line 351
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_port]\">
            ";
        // line 354
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SMTP Port");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"number\"
            max=\"65535\"
            min=\"1\"
            maxlength=\"5\"
            style=\"width:5em;\"
            id=\"settings[mta_port]\"
            name=\"mta[port]\"
            value=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "port", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: amazon region -->
      <tr class=\"mailpoet_aws_field\" data-field=\"region\"
        ";
        // line 374
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 376
            echo "        style=\"display:none;\"
        ";
        }
        // line 378
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_region]\">
            ";
        // line 381
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Region");
        echo "
          </label>
        </th>
        <td>
          <select
            id=\"settings[mta_region]\"
            name=\"mta[region]\"
            value=\"";
        // line 388
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 389
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()), "html", null, true);
        }
        // line 390
        echo "\"
          >
            ";
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["hosts"]) ? $context["hosts"] : null), "smtp", array()), "AmazonSES", array()), "regions", array()));
        foreach ($context['_seq'] as $context["region"] => $context["server"]) {
            // line 393
            echo "            <option
              value=\"";
            // line 394
            echo twig_escape_filter($this->env, $context["server"], "html", null, true);
            echo "\"
            ";
            // line 395
            if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "region", array()) == $context["server"])) {
                // line 396
                echo "            selected=\"selected\"
            ";
            }
            // line 398
            echo "            >
            ";
            // line 399
            echo twig_escape_filter($this->env, $context["region"], "html", null, true);
            echo "
            </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['region'], $context['server'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "          </select>
        </td>
      </tr>

      <!-- smtp: amazon access_key -->
      <tr class=\"mailpoet_aws_field\" data-field=\"access_key\"
        ";
        // line 409
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 411
            echo "        style=\"display:none;\"
        ";
        }
        // line 413
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_access_key]\">
            ";
        // line 416
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Access Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_access_key]\"

            name=\"mta[access_key]\"
            value=\"";
        // line 426
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 427
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "access_key", array()), "html", null, true);
        }
        // line 428
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: amazon secret_key -->
      <tr class=\"mailpoet_aws_field\" data-field=\"secret_key\"
        ";
        // line 436
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "AmazonSES"))) {
            // line 438
            echo "        style=\"display:none;\"
        ";
        }
        // line 440
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_secret_key]\">
            ";
        // line 443
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secret Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_secret_key]\"

            name=\"mta[secret_key]\"
            value=\"";
        // line 453
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) == "smtp")) {
            // line 454
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "secret_key", array()), "html", null, true);
        }
        // line 455
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: api key -->
      <tr class=\"mailpoet_sendgrid_field\" data-field=\"api_key\"
        ";
        // line 463
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "SendGrid"))) {
            // line 465
            echo "        style=\"display:none;\"
        ";
        }
        // line 467
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_api_key]\">
            ";
        // line 470
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("API Key");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_api_key]\"
            name=\"mta[api_key]\"
            value=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "api_key", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>

      <!-- smtp: login -->
      <tr id=\"mta_login\" class=\"mailpoet_smtp_field\" data-field=\"login\"
        ";
        // line 487
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 489
            echo "        style=\"display:none;\"
        ";
        }
        // line 491
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_login]\">
            ";
        // line 494
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Login");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"settings[mta_login]\"
            name=\"mta[login]\"
            value=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "login", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>
      <!-- smtp: password -->
      <tr id=\"mta_password\" class=\"mailpoet_smtp_field\" data-field=\"password\"
        ";
        // line 510
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 512
            echo "        style=\"display:none;\"
        ";
        }
        // line 514
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_password]\">
            ";
        // line 517
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Password");
        echo "
          </label>
        </th>
        <td>
          <input
            type=\"password\"
            class=\"regular-text\"
            id=\"settings[mta_password]\"
            name=\"mta[password]\"
            value=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "password", array()), "html", null, true);
        echo "\"
          />
        </td>
      </tr>
      <!-- smtp: security protocol -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"encryption\"
        ";
        // line 533
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 535
            echo "        style=\"display:none;\"
        ";
        }
        // line 537
        echo "      >
        <th scope=\"row\">
          <label for=\"settings[mta_encryption]\">
            ";
        // line 540
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Secure Connection");
        echo "
          </label>
        </th>
        <td>
          <select id=\"settings[mta_encryption]\" name=\"mta[encryption]\">
            <option value=\"\">";
        // line 545
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "</option>
            <option
              value=\"ssl\"
            ";
        // line 548
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "ssl")) {
            // line 549
            echo "            selected=\"selected\"
            ";
        }
        // line 551
        echo "            >SSL</option>
            <option
              value=\"tls\"
            ";
        // line 554
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "encryption", array()) == "tls")) {
            // line 555
            echo "            selected=\"selected\"
            ";
        }
        // line 557
        echo "            >TLS</option>
          </select>
        </td>
      </tr>
      <!-- smtp: authentication -->
      <tr class=\"mailpoet_smtp_field\" data-field=\"authentication\"
        ";
        // line 564
        if ((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "smtp") || ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "smtp_provider", array()) != "manual"))) {
            // line 566
            echo "        style=\"display:none;\"
        ";
        }
        // line 568
        echo "      >
        <th scope=\"row\">
          <label>
            ";
        // line 571
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Authentication");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 574
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this option set to Yes. Only a tiny portion of SMTP services prefer Authentication to be turned off.");
        echo "
          </p>
        </th>
        <td>
          <label>
            <input
              type=\"radio\"
              value=\"1\"
              name=\"mta[authentication]\"
            ";
        // line 584
        if (( !$this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) || ($this->getAttribute($this->getAttribute(        // line 585
(isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "1"))) {
            // line 586
            echo "            checked=\"checked\"
            ";
        }
        // line 588
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes");
        echo "
          </label>
          &nbsp;
          <label>
            <input
              type=\"radio\"
              value=\"-1\"
              name=\"mta[authentication]\"
            ";
        // line 596
        if (($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta", array()), "authentication", array()) == "-1")) {
            // line 597
            echo "            checked=\"checked\"
            ";
        }
        // line 599
        echo "            />";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("No");
        echo "
          </label>
        </td>
      </tr>
      </tbody>
    </table>
  </div>

  <table class=\"form-table\">
    <tbody>
      <!-- SPF -->
      <tr id=\"mailpoet_mta_spf\">
        <th scope=\"row\">
          <label>
            ";
        // line 613
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF Signature (Highly recommended!)");
        echo "
          </label>
          <p class=\"description\">
            ";
        // line 616
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This improves your delivery rate by verifying that you're allowed to send emails from your domain.");
        echo "
          </p>
        </th>
        <td>
          <p>
            ";
        // line 621
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("SPF is set up in your DNS. Read your host's support documentation for more information.");
        echo "
          </p>
        </td>
      </tr>
      <!-- test method -->
      <tr>
        <th scope=\"row\">
          <label for=\"mailpoet_mta_test_email\">
            ";
        // line 629
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Test the sending method");
        echo "
          </label>
        </th>
        <td>
          <p>
            <input
              type=\"text\"
              id=\"mailpoet_mta_test_email\"
              class=\"regular-text\"
              value=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_user"]) ? $context["current_user"] : null), "user_email", array()), "html", null, true);
        echo "\"
            />
            <a
              id=\"mailpoet_mta_test\"
              class=\"button-secondary\"
            >";
        // line 643
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Send a test email");
        echo "</a>

            <span id=\"tooltip-test\"></span>
          </p>
        </td>
      </tr>
      <!-- activate or cancel -->
      <tr>
        <th scope=\"row\">
          <p>
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_save button button-primary\"
            >";
        // line 656
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Activate");
        echo "</a>
            &nbsp;
            <a
              href=\"javascript:;\"
              class=\"mailpoet_mta_setup_cancel\"
            >";
        // line 661
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("or Cancel");
        echo "</a>
          </p>
        </th>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    var tooltip = '";
        // line 672
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, MailPoet\Util\Helpers::replaceLinkTags($this->env->getExtension('MailPoet\Twig\I18n')->translate("Didn't receive the test email? Read our [link]quick guide[/link] to sending issues."), "http://beta.docs.mailpoet.com/article/146-my-newsletters-are-not-being-received", array("target" => "_blank")), "js"), "html", null, true);
        // line 674
        echo "'

    MailPoet.helpTooltip.show(document.getElementById(\"tooltip-test\"), {
      tooltipId: \"tooltip-settings-test\",
      tooltip: tooltip,
    });

    var sending_frequency_template =
      Handlebars.compile(\$('#mailpoet_sending_frequency_template').html());

    // om dom loaded
    \$(function() {
      // constrain number type inputs
      \$('input[type=\"number\"]').on('keyup', function() {
        var currentValue = \$(this).val();
        if(!currentValue) return;

        var minValue = \$(this).attr('min');
        var maxValue = \$(this).attr('max');
        \$(this).val(Math.min(Math.max(minValue, currentValue), maxValue));
      });

      // testing sending method
      \$('#mailpoet_mta_test').on('click', function() {
        // get test email and include it in data
        var recipient = \$('#mailpoet_mta_test_email').val();

        var settings = jQuery('#mailpoet_settings_form').mailpoetSerializeObject();
        var mailer = settings.mta;

        mailer.method = getMethodFromGroup(\$('#mailpoet_smtp_method').val());

        // check that we have a from address
        if(settings.sender.address.length === 0) {
          // validation
          return MailPoet.Notice.error(
            '";
        // line 710
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email could not be sent. Make sure the option \"Email notifications\" has a FROM email address in the Basics tab."), "js"), "html", null, true);
        echo "',
            { scroll: true, static: true }
          );
        }

        MailPoet.Modal.loading(true);
        MailPoet.Ajax.post({
          api_version: window.mailpoet_api_version,
          endpoint: 'mailer',
          action: 'send',
          data: {
            mailer: mailer,
            newsletter: {
              subject: \"";
        // line 723
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("This is a Sending Method Test");
        echo "\",
              body: {
                html: \"<p>";
        // line 725
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "</p>\",
                text: \"";
        // line 726
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yup, it works! You can start blasting away emails to the moon.");
        echo "\"
              }
            },
            subscriber: recipient
          }
        }).always(function() {
          MailPoet.Modal.loading(false);
        }).done(function(response) {
          MailPoet.Notice.success(
            \"";
        // line 735
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("The email has been sent! Check your inbox."), "js"), "html", null, true);
        echo "\",
            { scroll: true }
          );
          trackTestEmailSent(mailer, true);
        }).fail(function(response) {
          if (response.errors.length > 0) {
            MailPoet.Notice.error(
              response.errors.map(function(error) { return _.escape(error.message); }),
              { scroll: true }
            );
          }
          trackTestEmailSent(mailer, false);
        });
      });

      // sending frequency update based on selected provider
      \$('#mailpoet_web_host').on('change keyup', renderHostSendingFrequency);

      // update manual sending frequency when values are changed
      \$('#other_frequency_emails').on('change keyup', function() {
        updateSendingFrequency('other');
      });
      \$('#other_frequency_interval').on('change keyup', function() {
        updateSendingFrequency('other');
      });

      // save configuration of a sending method
      \$('.mailpoet_sending_service_activate').on('click', function() {
        \$('#mta_group').val('mailpoet');
        saveSendingMethodConfiguration('mailpoet');
      });
      \$('.mailpoet_mta_setup_save').on('click', function() {
        \$('#mailpoet_smtp_method').trigger(\"change\");
        \$('#other_frequency_emails').trigger(\"change\");
        // get selected method
        var group = \$('.mailpoet_sending_method:visible').data('group');
        saveSendingMethodConfiguration(group);
      });
      \$('#mailpoet_smtp_method').on('change keyup', renderHostsSelect);
      \$('#mailpoet_sending_frequency').on('change keyup', sendingFrequencyMethodUpdated);

      ";
        // line 776
        if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "mta_group", array()) != "mailpoet")) {
            // line 777
            echo "        \$('#mailpoet_smtp_method').trigger(\"change\");
        \$('#other_frequency_emails').trigger(\"change\");
      ";
        }
        // line 780
        echo "
      function saveSendingMethodConfiguration(group) {

        // set sending method
        if(group === undefined) {
          MailPoet.Notice.error(
            \"";
        // line 786
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('MailPoet\Twig\I18n')->translate("You have selected an invalid sending method."), "js"), "html", null, true);
        echo "\"
          );
        } else {
          // set new sending method active
          setSendingMethodGroup(group);

          // enforce signup confirmation depending on selected group
          setSignupConfirmation(group);

          // back to selection of sending methods
          MailPoet.Router.navigate('mta', { trigger: true });

          // save settings
          \$('.mailpoet_settings_submit > input').trigger('click');
        }
      }

      function setSignupConfirmation(group) {
        if (group === 'mailpoet') {
          // force signup confirmation (select \"Yes\")
          \$('.mailpoet_signup_confirmation[value=\"1\"]').attr('checked', true);
          \$('.mailpoet_signup_confirmation[value=\"\"]').attr('checked', false);

          // hide radio inputs
          \$('#mailpoet_signup_confirmation_input').hide();

          // show mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').show();

          // show signup confirmation options
          \$('#mailpoet_signup_options').show();
        } else {
          // show radio inputs
          \$('#mailpoet_signup_confirmation_input').show();

          // hide mailpoet specific notice
          \$('#mailpoet_signup_confirmation_notice').hide();
        }
      }

      function setSendingMethodGroup(group) {
        // deactivate other sending methods
        \$('.mailpoet_sending_methods .mailpoet_active')
          .removeClass('mailpoet_active');

        // set active sending method
        \$('.mailpoet_sending_methods li[data-group=\"'+group+'\"]')
          .addClass('mailpoet_active');

        var method = getMethodFromGroup(\$('#mta_group').val());

        \$('#mta_method').val(method);

        // set MailPoet method description
        \$('#mailpoet_sending_method_active_text')
          .toggleClass('mailpoet_hidden', group !== 'mailpoet');
        \$('#mailpoet_sending_method_inactive_text')
          .toggleClass('mailpoet_hidden', group === 'mailpoet');

        // Hide server error notices
        \$('.mailpoet_notice_server').hide();

        updateMSSActivationUI();
      }

      function getMethodFromGroup(group) {
        var group = group || 'website';

        switch(group) {
          case 'mailpoet':
            return 'MailPoet';
          break;
          case 'server':
          case 'website':
            return 'PHPMail';
          break;
          case 'manual':
          case 'smtp':
            var method = \$('#mailpoet_smtp_provider').val();
            if(method === 'manual') {
              return 'SMTP';
            }
            return method;
          break;
          default:
            return group;
        }
      }

      // cancel configuration of a sending method
      \$('.mailpoet_mta_setup_cancel').on('click', function() {
        // back to selection of sending methods
        MailPoet.Router.navigate('mta', { trigger: true });
      });

      // render sending frequency form
      \$('#mailpoet_smtp_provider').trigger('change');
      \$('#mailpoet_web_host').trigger('change');

      function trackTestEmailSent(mailer, success) {
        MailPoet.trackEvent(
          'User has sent a test email from Settings',
          {
            'Sending was successful': !!success,
            'Sending method type': mailer.method,
            'MailPoet Free version': window.mailpoet_version
          }
        );
      }

      \$('.mailpoet_sending_methods_help a').on('click', function() {
        MailPoet.trackEvent(
          'User has clicked to view the sending comparison table',
          {'MailPoet Free version': window.mailpoet_version}
        );
      });
    });

    function setProviderForm() {
      // check provider
      var provider = \$(this).find('option:selected').first();
      var fields = provider.data('fields');

      if(fields === undefined) {
        fields = [
          'host',
          'port',
          'login',
          'password',
          'authentication',
          'encryption'
        ];
      } else {
        fields = fields.split(',');
      }

      \$('.mailpoet_smtp_field').hide();

      fields.map(function(field) {
        \$('.mailpoet_smtp_field[data-field=\"'+field+'\"]').show();
      });

      // update sending frequency
      renderSMTPSendingFrequency(provider);
    }

    function renderSMTPSendingFrequency() {
      // set sending frequency
      var emails = \$('#smtp_frequency_emails').val();
      var interval = \$('#smtp_frequency_interval').val();
      setSendingFrequency({
        output: '#mailpoet_smtp_daily_emails',
        only_daily: true,
        emails: emails,
        interval: interval
      });
      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function sendingFrequencyMethodUpdated() {
      var method = \$(this).find('option:selected').first();
      var sendingMethod = \$('#mailpoet_smtp_method').find('option:selected').first().val();
      if(method.val() === \"manual\") {
        \$('#mailpoet_sending_frequency_manual').show();
        \$('#mailpoet_recommended_daily_emails').hide();
        \$('#other_frequency_emails').trigger(\"change\");
      } else {
        \$('#mailpoet_sending_frequency_manual').hide();
        if(sendingMethod !== \"server\") {
          \$('#mailpoet_recommended_daily_emails').show();
        }
        \$('#mailpoet_smtp_method').trigger(\"change\");
      }
    }

    function renderHostsSelect() {
      var method = \$(this).find('option:selected').first();
      var val = method.val();

      if(val === \"server\") {
        \$('#mailpoet_sending_method_host').show();
        \$('#mta_group').val('website');
      } else {
        \$('#mailpoet_sending_method_host').hide();
      }
      if(val === \"manual\") {
        \$('.mailpoet_smtp_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('manual');
      } else {
        \$('.mailpoet_smtp_field').hide();
      }
      if(val === \"AmazonSES\") {
        \$('.mailpoet_aws_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('AmazonSES');
      } else {
        \$('.mailpoet_aws_field').hide();
      }
      if(val === \"SendGrid\") {
        \$('.mailpoet_sendgrid_field').show();
        \$('#mta_group').val('smtp');
        \$('#mailpoet_smtp_provider').val('SendGrid');
      } else {
        \$('.mailpoet_sendgrid_field').hide();
      }
      var emails = method.data('emails');
      var interval = method.data('interval');
      if(val === \"server\") {
        emails = \$('#mailpoet_web_host').find('option:selected').first().data('emails');
        interval = \$('#mailpoet_web_host').find('option:selected').first().data('interval');
      }
      const frequencyMethod = \$('#mailpoet_sending_frequency').find('option:selected').first().val();
      if(frequencyMethod === \"manual\") {
        \$('#mailpoet_recommended_daily_emails').hide();
        emails = \$('#other_frequency_emails').val();
        interval = \$('#other_frequency_interval').val();
      } else {
        \$('#mailpoet_recommended_daily_emails').show();
      }
      setSendingFrequency({
        output: '#mailpoet_recommended_daily_emails',
        only_daily: false,
        emails: emails,
        interval: interval
      });
      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function renderHostSendingFrequency() {
      var host = \$(this).find('option:selected').first();
      var frequencyType = \$(\"#mailpoet_sending_frequency\").find('option:selected').first().val();

      var emails =
        host.data('emails') || ";
        // line 1022
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "emails", array()), "html", null, true);
        echo ";
      var interval =
        host.data('interval') || ";
        // line 1024
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["default_frequency"]) ? $context["default_frequency"] : null), "website", array()), "interval", array()), "html", null, true);
        echo ";
      var fields =
        host.data('fields') || '';

      if (frequencyType === \"manual\") {
        return;
      } else {
        setSendingFrequency({
          output: '#mailpoet_recommended_daily_emails',
          only_daily: false,
          emails: emails,
          interval: interval
        });
      }

      \$('#mta_frequency_emails').val(emails);
      \$('#mta_frequency_interval').val(interval);
    }

    function updateSendingFrequency(method) {
      // get emails
      var options = {
        only_daily: true,
        emails: \$('#'+method+'_frequency_emails').val(),
        interval: \$('#'+method+'_frequency_interval').val()
      };

      var MINUTES_PER_DAY = 1440;
      var SECONDS_PER_DAY = 86400;

      options.daily_emails = ~~(
        (MINUTES_PER_DAY / options.interval) * options.emails
      );

      options.emails_per_second = (~~(
        ((options.daily_emails) / 86400) * 10)
      ) / 10;


      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$('#mailpoet_'+method+'_daily_emails').html(
        sending_frequency_template(options)
      );

      // update actual sending frequency values
      \$('#mta_frequency_emails').val(options.emails);
      \$('#mta_frequency_interval').val(options.interval);
    }

    function setSendingFrequency(options) {
      options.daily_emails = ~~((1440 / options.interval) * options.emails);

      // format daily emails number according to locale
      options.daily_emails = options.daily_emails.toLocaleString();

      \$(options.output).html(
        sending_frequency_template(options)
      );
    }

    Handlebars.registerHelper('format_time', function(value, block) {
      var label = null;
      var labels = {
        minute: \"";
        // line 1089
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every minute");
        echo "\",
        minutes: \"";
        // line 1090
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d minutes");
        echo "\",
        hour: \"";
        // line 1091
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every hour");
        echo "\",
        hours: \"";
        // line 1092
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("every %1\$d hours");
        echo "\"
      };

      // cast time as int
      value = ~~(value);

      // format time depending on the value
      if(value >= 60) {
        // we're dealing with hours
        if(value === 60) {
          label = labels.hour;
        } else {
          label = labels.hours;
        }
        value /= 60;
      } else {
        // we're dealing with minutes
        if(value === 1) {
          label = labels.minute;
        } else {
          label = labels.minutes;
        }
      }

      if(label !== null) {
        return label.replace('%1\$d', value);
      } else {
        return value;
      }
    });
  });

  // enable/disable MSS method activate button and notice
  function updateMSSActivationUI() {
    var \$ = jQuery;
    var group = \$('.mailpoet_sending_methods .mailpoet_active').data('group');
    var key_valid = !\$('.mailpoet_mss_key_valid').hasClass('mailpoet_hidden');
    var activation_possible = group !== 'mailpoet' && key_valid;
    \$('.mailpoet_sending_service_activate').prop('disabled', !activation_possible);
    \$('.mailpoet_mss_activate_notice').toggle(activation_possible);
  }
</script>

";
        // line 1135
        echo $this->env->getExtension('MailPoet\Twig\Handlebars')->generatePartial($this->env, $context, "mailpoet_sending_frequency_template", "settings/templates/sending_frequency.hbs");
        // line 1138
        echo "
";
    }

    public function getTemplateName()
    {
        return "settings/mta.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1617 => 1138,  1615 => 1135,  1569 => 1092,  1565 => 1091,  1561 => 1090,  1557 => 1089,  1489 => 1024,  1484 => 1022,  1245 => 786,  1237 => 780,  1232 => 777,  1230 => 776,  1186 => 735,  1174 => 726,  1170 => 725,  1165 => 723,  1149 => 710,  1111 => 674,  1109 => 672,  1095 => 661,  1087 => 656,  1071 => 643,  1063 => 638,  1051 => 629,  1040 => 621,  1032 => 616,  1026 => 613,  1008 => 599,  1004 => 597,  1002 => 596,  990 => 588,  986 => 586,  984 => 585,  983 => 584,  971 => 574,  965 => 571,  960 => 568,  956 => 566,  954 => 564,  946 => 557,  942 => 555,  940 => 554,  935 => 551,  931 => 549,  929 => 548,  923 => 545,  915 => 540,  910 => 537,  906 => 535,  904 => 533,  895 => 526,  883 => 517,  878 => 514,  874 => 512,  872 => 510,  863 => 503,  851 => 494,  846 => 491,  842 => 489,  840 => 487,  830 => 479,  818 => 470,  813 => 467,  809 => 465,  807 => 463,  798 => 455,  795 => 454,  793 => 453,  780 => 443,  775 => 440,  771 => 438,  769 => 436,  760 => 428,  757 => 427,  755 => 426,  742 => 416,  737 => 413,  733 => 411,  731 => 409,  723 => 402,  714 => 399,  711 => 398,  707 => 396,  705 => 395,  701 => 394,  698 => 393,  694 => 392,  690 => 390,  687 => 389,  685 => 388,  675 => 381,  670 => 378,  666 => 376,  664 => 374,  654 => 366,  639 => 354,  634 => 351,  630 => 349,  628 => 347,  620 => 341,  608 => 332,  602 => 329,  597 => 326,  593 => 324,  591 => 322,  582 => 315,  575 => 310,  568 => 308,  562 => 306,  560 => 305,  556 => 304,  553 => 303,  549 => 301,  546 => 300,  542 => 298,  540 => 296,  539 => 295,  535 => 293,  532 => 292,  528 => 291,  523 => 289,  520 => 288,  514 => 286,  508 => 284,  506 => 283,  497 => 276,  493 => 274,  491 => 272,  482 => 265,  479 => 264,  475 => 262,  473 => 260,  467 => 256,  453 => 245,  443 => 237,  434 => 235,  430 => 233,  428 => 232,  424 => 231,  420 => 230,  416 => 229,  413 => 228,  409 => 227,  404 => 225,  385 => 209,  380 => 206,  376 => 204,  374 => 202,  367 => 196,  358 => 194,  354 => 192,  352 => 191,  348 => 190,  344 => 189,  340 => 188,  336 => 187,  333 => 186,  329 => 185,  325 => 184,  319 => 181,  316 => 180,  312 => 178,  310 => 176,  304 => 172,  291 => 162,  278 => 151,  276 => 148,  266 => 141,  259 => 137,  251 => 132,  248 => 131,  246 => 127,  242 => 126,  238 => 125,  234 => 124,  229 => 122,  224 => 120,  220 => 118,  216 => 117,  205 => 110,  201 => 109,  192 => 103,  182 => 98,  176 => 95,  170 => 92,  161 => 88,  157 => 87,  153 => 86,  149 => 85,  145 => 84,  141 => 83,  135 => 80,  127 => 77,  120 => 73,  115 => 71,  107 => 68,  100 => 64,  95 => 61,  91 => 60,  81 => 53,  70 => 45,  61 => 39,  50 => 31,  40 => 24,  31 => 18,  23 => 12,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/mta.html", "C:\\wamp64\\www\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\mta.html");
    }
}
