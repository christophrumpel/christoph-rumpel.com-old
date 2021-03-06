<?php

namespace App\Services\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Policy;
use Spatie\Csp\Exceptions\InvalidDirective;

class CustomPolicies extends Policy
{
    /** @var App's origin */
    protected $origin;

    /**
     * @throws InvalidDirective
     */
    public function configure()
    {
        $this->setDefaultPolicies();
        $this->addGoogleFontPolicies();
        $this->addGoogleAnalyticsPolicies();
        $this->addGravatarPolicies();
        $this->addFacebookChatbotPolicies();
        $this->addMailFormPolicies();
        $this->addImagesFromNme();
        $this->addSmoothScroll();
    }

    /**
     * @return Policy
     * @throws InvalidDirective
     */
    private function setDefaultPolicies()
    {
        return $this->addDirective(Directive::BASE, 'self')
            ->addDirective(Directive::CONNECT, 'self')
            ->addDirective(Directive::DEFAULT, 'self')
            ->addDirective(Directive::FORM_ACTION, 'self')
            ->addDirective(Directive::IMG, 'self')
            ->addDirective(Directive::MEDIA, 'self')
            ->addDirective(Directive::OBJECT, 'self')
            ->addDirective(Directive::SCRIPT, 'self')
            ->addDirective(Directive::STYLE, 'self');
    }

    /**
     * @throws InvalidDirective
     */
    private function addGoogleFontPolicies()
    {
        $this->addDirective(Directive::FONT, [
            'fonts.gstatic.com',
            'fonts.googleapis.com',
            'data:',
        ])
            ->addDirective(Directive::STYLE, 'fonts.googleapis.com');
    }

    /**
     * @throws InvalidDirective
     */
    private function addGoogleAnalyticsPolicies()
    {
        $this->addDirective(Directive::SCRIPT, [
            '*.googletagmanager.com',
            '*.google-analytics.com',
        ])
            ->addDirective(Directive::IMG, '*.google-analytics.com')
            ->addDirective(Directive::SCRIPT, '\'sha256-v7B5PDsgEuAa8xkD6IdvngTMioN9v+6o0H1fZ0RlfaM=\'');
    }

    /**
     * @throws InvalidDirective
     */
    private function addGravatarPolicies()
    {
        $this->addDirective(Directive::IMG, '*.gravatar.com');
    }

    /**
     * @throws InvalidDirective
     */
    private function addFacebookChatbotPolicies()
    {
        $this->addDirective(Directive::SCRIPT, '*.facebook.net')
            ->addDirective(Directive::IMG, '*.facebook.com')
            ->addDirective(Directive::FRAME, '*.facebook.com *.youtube.com')
            ->addDirective(Directive::STYLE, '\'sha256-wBw6YmX3Lhxkl6S8PnlNxVcwALnNr89VRt5yOv5yQqE=\'')
            ->addDirective(Directive::SCRIPT, '\'sha256-P70IONn7LzR0v1pnyUiwOX+9oJzqbc7ZGp+eujcwZsE=\'');
    }

    /**
     * @throws InvalidDirective
     */
    private function addMailFormPolicies()
    {
        $this->addDirective(Directive::FORM_ACTION, 'https://app.convertkit.com');
    }

    /**
     * @throws InvalidDirective
     */
    private function addImagesFromNme()
    {
        $this->addDirective(Directive::IMG, 'screenshots.nomoreencore.com');
    }

    /**
     * @throws InvalidDirective
     */
    private function addSmoothScroll()
    {
        $this->addDirective(Directive::SCRIPT, '\'sha256-pjpfKUw4LCwwr0e2/ABrZCkRUktaJDW5Wmg7psjFXLs=\'');
    }

}
