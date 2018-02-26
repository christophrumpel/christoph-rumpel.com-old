<?php

namespace App\Services\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class GooglePolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        $this->addGeneralDirectives();
        $this->addDirectivesForGoogleFonts();
        $this->addDirectivesForGoogleAnalytics();
    }

    protected function addGeneralDirectives()
    {
        return $this
            ->addDirective(Directive::BASE, 'self')
            ->addNonceForDirective(Directive::SCRIPT)
            ->addDirective(Directive::SCRIPT, [
                'christoph-rumpel.com',
                'christoph-rumpel.test',
            ])
            ->addDirective(Directive::STYLE, [
                'christoph-rumpel.com',
                'christoph-rumpel.test',
                'unsafe-inline',
                'data:'
            ])
            ->addDirective(Directive::FORM_ACTION, [
                'christoph-rumpel.com',
                'christoph-rumpel.test',
            ])
            ->addDirective(Directive::IMG, [
                '*',
                'unsafe-inline',
                'data:',
            ])
            ->addDirective(Directive::OBJECT, [
                'none'
            ]);
    }

    /**
     * @return \Spatie\Csp\Policies\Policy
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    private function addDirectivesForGoogleFonts()
    {
        return $this->addDirective(Directive::FONT, [
            'fonts.gstatic.com',
            'data:'
        ])
            ->addDirective(Directive::SCRIPT, 'fonts.googleapis.com')
            ->addDirective(Directive::STYLE, 'fonts.googleapis.com');
    }

    /**
     * @return GooglePolicy
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    protected function addDirectivesForGoogleAnalytics(): self
    {
        return $this->addDirective(Directive::SCRIPT, '*.google-analytics.com');
    }

    /**
     * @return GooglePolicy
     * @throws \Spatie\Csp\Exceptions\InvalidDirective
     */
    protected function addDirectivesForGoogleTagManager(): self
    {
        return $this->addDirective(Directive::SCRIPT, '*.googletagmanager.com');
    }

}