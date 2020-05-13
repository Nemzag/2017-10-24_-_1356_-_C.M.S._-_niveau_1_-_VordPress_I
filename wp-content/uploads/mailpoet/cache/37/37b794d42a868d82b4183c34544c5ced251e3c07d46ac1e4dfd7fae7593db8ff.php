<?php

/* settings/basics.html */
class __TwigTemplate_bf1540d07c90260a875ecc11dcc168a6f331bd7af9169b9de2bead317f2154f7 extends Twig_Template
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
        echo "<table class=\"form-table\">
  <tbody>
    <tr>
      <th scope=\"row\">
        <label for=\"settings[from_name]\">
          ";
        // line 6
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Default sender");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 9
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("These email addresses will be selected by default for each new email.");
        echo "
        </p>
      </th>
      <td>
        <!-- default from name & email -->
        <p>
          <label for=\"settings[from_name]\">";
        // line 15
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("From");
        echo "</label>
          <input type=\"text\"
            id=\"settings[from_name]\"
            name=\"sender[name]\"
            value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sender", array()), "name", array()), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 20
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your name");
        echo "\" />
          <input type=\"email\"
            id=\"settings[from_email]\"
            name=\"sender[address]\"
            value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "sender", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"from@mydomain.com\" />
        </p>
        <!-- default reply_to name & email -->
        <p>
          <label for=\"settings[reply_name]\">";
        // line 29
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Reply-to");
        echo "</label>
          <input type=\"text\"
            id=\"settings[reply_name]\"
            name=\"reply_to[name]\"
            value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "reply_to", array()), "name", array()), "html", null, true);
        echo "\"
            placeholder=\"";
        // line 34
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Your name");
        echo "\" />
          <input type=\"email\"
            id=\"settings[reply_email]\"
            name=\"reply_to[address]\"
            value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "reply_to", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"reply_to@mydomain.com\" />
        </p>
      </td>
    </tr>
    <!-- email addresses receiving notifications -->
    <tr style=\"display:none\">
      <th scope=\"row\">
        <label for=\"settings[notification_email]\">
          ";
        // line 47
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Email notifications");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 50
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("These email addresses will receive notifications (separate each address with a comma).");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input type=\"text\"
            id=\"settings[notification_email]\"
            name=\"notification[address]\"
            value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "notification", array()), "address", array()), "html", null, true);
        echo "\"
            placeholder=\"notification@mydomain.com\"
            class=\"regular-text\" />
        </p>
        <p>
          <label for=\"settings[notification_on_subscribe]\">
            <input type=\"checkbox\" id=\"settings[notification_on_subscribe]\"
            name=\"notification[on_subscribe]\"
            value=\"1\"
            ";
        // line 67
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "notification", array()), "on_subscribe", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            ";
        // line 68
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When someone subscribes");
        echo "
          </label>
        </p>
        <p>
          <label for=\"settings[notification_on_unsubscribe]\">
            <input type=\"checkbox\"
            id=\"settings[notification_on_unsubscribe]\"
            name=\"notification[on_unsubscribe]\"
            value=\"1\"
            ";
        // line 77
        if ($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "notification", array()), "on_unsubscribe", array())) {
            echo "checked=\"checked\"";
        }
        echo " />
            ";
        // line 78
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When someone unsubscribes");
        echo "
          </label>
        </p>
      </td>
    </tr>
    <!-- ability to subscribe in comments -->
    <!-- TODO: Check if registration is enabled (if not, display a message and disable setting) -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[subscribe_on_comment]\">
          ";
        // line 88
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe in comments");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 91
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Visitors that comment on a post can subscribe to your list via a checkbox.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            data-toggle=\"mailpoet_subscribe_on_comment\"
            type=\"checkbox\"
            value=\"1\"
            id=\"settings[subscribe_on_comment]\"
            name=\"subscribe[on_comment][enabled]\"
            ";
        // line 102
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_comment", array()), "enabled", array())) {
            echo "checked=\"checked\"";
        }
        // line 103
        echo "          />
        </p>
        <div id=\"mailpoet_subscribe_on_comment\">
          <p>
            <input
              type=\"text\"
              id=\"settings[subscribe_on_comment_label]\"
              name=\"subscribe[on_comment][label]\"
              class=\"regular-text\"
              ";
        // line 112
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_comment", array()), "label", array())) {
            // line 113
            echo "                  value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_comment", array()), "label", array()), "html", null, true);
            echo "\"
              ";
        } else {
            // line 115
            echo "                value=\"";
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, add me to your mailing list");
            echo "\"
              ";
        }
        // line 117
        echo "            />
          </p>
          <p>
            <label>";
        // line 120
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Users will be subscribed to these lists:");
        echo "</label>
          </p>
          <p>
            <select
              id=\"mailpoet_subscribe_on_comment_segments\"
              name=\"subscribe[on_comment][segments][]\"
              data-placeholder=\"";
        // line 126
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Choose a list");
        echo "\"
              multiple
            >
              ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 130
            echo "                <option
                  value=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\"
                  ";
            // line 132
            if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_comment", array()), "segments", array()))) {
                // line 133
                echo "                    selected=\"selected\"
                  ";
            }
            // line 135
            echo "                >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "            </select>
          </p>
        </div>
      </td>
    </tr>
    <!-- ability to subscribe when registering -->
    <!-- TODO: Only available for the main site of a multisite! -->
    <!-- TODO: Check if registration is enabled (if not, display a message and disable setting) -->
    <tr>
      <th scope=\"row\">
        <label for=\"settings[subscribe_on_register]\">
          ";
        // line 148
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribe in registration form");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 151
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Allow users who register as a WordPress user on your website to subscribe to a MailPoet list (in addition to the \"WordPress Users\" list).");
        echo "
        </p>
      </th>
      <td>
        ";
        // line 155
        if (($this->getAttribute((isset($context["flags"]) ? $context["flags"] : null), "registration_enabled", array()) == true)) {
            // line 156
            echo "          <p>
            <input
              data-toggle=\"mailpoet_subscribe_in_form\"
              type=\"checkbox\"
              value=\"1\"
              id=\"settings[subscribe_on_register]\"
              name=\"subscribe[on_register][enabled]\"
              ";
            // line 163
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_register", array()), "enabled", array())) {
                // line 164
                echo "                checked=\"checked\"
              ";
            }
            // line 166
            echo "            />
          </p>

          <div id=\"mailpoet_subscribe_in_form\">
            <p>
              <input
                type=\"text\"
                id=\"settings[subscribe_on_register_label]\"
                name=\"subscribe[on_register][label]\"
                class=\"regular-text\"
                ";
            // line 176
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_register", array()), "label", array())) {
                // line 177
                echo "                  value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_register", array()), "label", array()), "html", null, true);
                echo "\"
                ";
            } else {
                // line 179
                echo "                  value=\"";
                echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Yes, add me to your mailing list");
                echo "\"
                ";
            }
            // line 181
            echo "              />
            </p>
            <p>
              <label>";
            // line 184
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Users will be subscribed to these lists:");
            echo "</label>
            </p>
            <p>
              <select
                id=\"mailpoet_subscribe_on_register_segments\"
                name=\"subscribe[on_register][segments][]\"
                data-placeholder=\"";
            // line 190
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Choose a list");
            echo "\"
                multiple
              >
                ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 194
                echo "                  <option
                    value=\"";
                // line 195
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
                echo "\"
                    ";
                // line 196
                if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscribe", array()), "on_register", array()), "segments", array()))) {
                    // line 197
                    echo "                      selected=\"selected\"
                    ";
                }
                // line 199
                echo "                  >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
                echo ")</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "              </select>
            </p>
          </div>
        ";
        } else {
            // line 205
            echo "          <p>
            <em>";
            // line 206
            echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Registration is disabled on this site.");
            echo "</em>
          </p>
        ";
        }
        // line 209
        echo "      </td>
    </tr>
    <!-- edit subscription-->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_manage_page\">
          ";
        // line 215
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Manage Subscription page");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 218
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When your subscribers click the \"Manage your subscription\" link, they will be directed to this page.");
        echo "
          <br />
          ";
        // line 220
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("If you want to use a custom Subscription page, simply paste this shortcode on to a WordPress page: [mailpoet_manage_subscription]");
        echo "
        </p>
      </th>
      <td>
        <p>
          <select
            class=\"mailpoet_page_selection\"
            id=\"subscription_manage_page\"
            name=\"subscription[pages][manage]\"
          >
            ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 231
            echo "              <option
                value=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"
                data-preview-url=\"";
            // line 233
            echo $this->getAttribute($this->getAttribute($context["page"], "url", array()), "manage", array());
            echo "\"
                ";
            // line 234
            if (($this->getAttribute($context["page"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscription", array()), "pages", array()), "manage", array()))) {
                // line 235
                echo "                  selected=\"selected\"
                ";
            }
            // line 237
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "          </select>
          <a
            class=\"mailpoet_page_preview\"
            href=\"javascript:;\"
            title=\"";
        // line 243
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview page");
        echo "\"
          >";
        // line 244
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
        <p>
          <label>";
        // line 247
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Subscribers can choose from these lists:");
        echo "</label>
        </p>
        <p>
          <select
            id=\"mailpoet_subscription_edit_segments\"
            name=\"subscription[segments][]\"
            data-placeholder=\"";
        // line 253
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 257
            echo "              <option
                value=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\"
                ";
            // line 259
            if (twig_in_filter($this->getAttribute($context["segment"], "id", array()), $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscription", array()), "segments", array()))) {
                // line 260
                echo "                  selected=\"selected\"
                ";
            }
            // line 262
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "          </select>
        </p>
      </td>
    </tr>
    <!-- unsubscribe-->
    <tr>
      <th scope=\"row\">
        <label for=\"subscription_unsubscribe_page\">
          ";
        // line 272
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Unsubscribe page");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 275
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("When your subscribers click the \"Unsubscribe\" link, they will be directed to this page.");
        echo "
          <br />
          ";
        // line 277
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("If you want to use a custom Unsubscribe page, simply paste this shortcode on to a WordPress page: [mailpoet_manage text=\"Manage your subscription\"]");
        echo "
        </p>
      </th>
      <td>
        <p>
          <select
            class=\"mailpoet_page_selection\"
            id=\"subscription_unsubscribe_page\"
            name=\"subscription[pages][unsubscribe]\"
          >
            ";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 288
            echo "              <option
                value=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "id", array()), "html", null, true);
            echo "\"
                data-preview-url=\"";
            // line 290
            echo $this->getAttribute($this->getAttribute($context["page"], "url", array()), "unsubscribe", array());
            echo "\"
                ";
            // line 291
            if (($this->getAttribute($context["page"], "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "subscription", array()), "pages", array()), "unsubscribe", array()))) {
                // line 292
                echo "                  selected=\"selected\"
                ";
            }
            // line 294
            echo "              >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "          </select>
          <a
            class=\"mailpoet_page_preview\"
            href=\"javascript:;\"
            title=\"";
        // line 300
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview page");
        echo "\"
          >";
        // line 301
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Preview");
        echo "</a>
        </p>
      </td>
    </tr>
    <!-- shortcode: archive page  -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 309
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Archive page shortcode");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 312
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Paste this shortcode on a page to display a list of past newsletters.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_shortcode_archives\"
            value=\"[mailpoet_archive]\"
            onClick=\"this.focus();this.select();\"
            readonly=\"readonly\"
          />
        </p>
        <p>
          <select
            id=\"mailpoet_shortcode_archives_list\"
            data-shortcode=\"mailpoet_archive\"
            data-output=\"mailpoet_shortcode_archives\"
            data-placeholder=\"";
        // line 331
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 335
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "          </select>
        </p>
      </td>
    </tr>
    <!-- shortcode: total number of subscribers -->
    <tr>
      <th scope=\"row\">
        <label>
          ";
        // line 345
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Shortcode to display total number of subscribers");
        echo "
        </label>
        <p class=\"description\">
          ";
        // line 348
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Paste this shortcode on a post or page to display the total number of confirmed subscribers.");
        echo "
        </p>
      </th>
      <td>
        <p>
          <input
            type=\"text\"
            class=\"regular-text\"
            id=\"mailpoet_shortcode_subscribers\"
            value=\"[mailpoet_subscribers_count]\"
            onClick=\"this.focus();this.select();\"
            readonly=\"readonly\"
          />
        </p>
        <p>
          <select
            id=\"mailpoet_shortcode_subscribers_count\"
            data-shortcode=\"mailpoet_subscribers_count\"
            data-output=\"mailpoet_shortcode_subscribers\"
            data-placeholder=\"";
        // line 367
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Leave this field empty to display all lists");
        echo "\"
            multiple
          >
            ";
        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
            // line 371
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "name", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["segment"], "subscribers", array()), "html", null, true);
            echo ")</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
        echo "          </select>
        </p>
      </td>
    </tr>
  </tbody>
</table>

<script type=\"text/javascript\">
  jQuery(function(\$) {
    // on dom loaded
    \$(function() {
      // select2 instances
      \$('#mailpoet_subscribe_on_comment_segments').select2();
      \$('#mailpoet_subscribe_on_register_segments').select2();
      \$('#mailpoet_subscription_edit_segments').select2();
      \$('#mailpoet_shortcode_archives_list').select2();
      \$('#mailpoet_shortcode_subscribers_count').select2();
      // fix lengthy placeholder from being cut off by select 2
      \$('.select2-search__field').each(function() {
        \$(this).css('width', (\$(this).attr('placeholder').length * 0.75) + 'em');
      });

      // shortcodes
      \$('#mailpoet_shortcode_archives_list, #mailpoet_shortcode_subscribers_count')
      .on('change', function() {
        var shortcode = \$(this).data('shortcode'),
          values = \$(this).val() || [];

        if (values.length > 0) {
          shortcode += ' segments=\"';
          shortcode += values.join(',');
          shortcode += '\"';
        }

        \$('#' + \$(this).data('output'))
          .val('[' + shortcode + ']');
      });
    });
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "settings/basics.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 373,  697 => 371,  693 => 370,  687 => 367,  665 => 348,  659 => 345,  649 => 337,  636 => 335,  632 => 334,  626 => 331,  604 => 312,  598 => 309,  587 => 301,  583 => 300,  577 => 296,  568 => 294,  564 => 292,  562 => 291,  558 => 290,  554 => 289,  551 => 288,  547 => 287,  534 => 277,  529 => 275,  523 => 272,  513 => 264,  502 => 262,  498 => 260,  496 => 259,  492 => 258,  489 => 257,  485 => 256,  479 => 253,  470 => 247,  464 => 244,  460 => 243,  454 => 239,  445 => 237,  441 => 235,  439 => 234,  435 => 233,  431 => 232,  428 => 231,  424 => 230,  411 => 220,  406 => 218,  400 => 215,  392 => 209,  386 => 206,  383 => 205,  377 => 201,  366 => 199,  362 => 197,  360 => 196,  356 => 195,  353 => 194,  349 => 193,  343 => 190,  334 => 184,  329 => 181,  323 => 179,  317 => 177,  315 => 176,  303 => 166,  299 => 164,  297 => 163,  288 => 156,  286 => 155,  279 => 151,  273 => 148,  260 => 137,  249 => 135,  245 => 133,  243 => 132,  239 => 131,  236 => 130,  232 => 129,  226 => 126,  217 => 120,  212 => 117,  206 => 115,  200 => 113,  198 => 112,  187 => 103,  183 => 102,  169 => 91,  163 => 88,  150 => 78,  144 => 77,  132 => 68,  126 => 67,  114 => 58,  103 => 50,  97 => 47,  85 => 38,  78 => 34,  74 => 33,  67 => 29,  59 => 24,  52 => 20,  48 => 19,  41 => 15,  32 => 9,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/basics.html", "C:\\wamp64\\www\\wordpress\\wp-content\\plugins\\mailpoet\\views\\settings\\basics.html");
    }
}
