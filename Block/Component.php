<?php
/**
 * Created by Q-Solutions Studio
 *
 * @category    Qoliber
 * @package     Qoliber_SessionTimeoutPopup
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

declare(strict_types=1);

namespace Qoliber\SessionTimeoutPopup\Block;

use Magento\Framework\Session\Config as SessionConfig;
use Magento\Framework\View\Element\Template;
use Magento\Store\Model\ScopeInterface;

class Component extends Template
{
    const XPATH_QOLIBER_SESSION_POPUP_TITLE = 'qoliber/sessionLifetimePopup/title';

    const XPATH_QOLIBER_SESSION_LOGOUT_MESSAGE = 'qoliber/sessionLifetimePopup/logged_out_msg';

    const XPATH_QOLIBER_SESSION_BUTTON_TITLE = 'qoliber/sessionLifetimePopup/button_title';

    const XPATH_QOLIBER_SESSION_TIMEOUT_WARNING = 'qoliber/sessionLifetimePopup/seconds_warning';

    public function getSessionLifetime(): int
    {
        return (int) $this->_scopeConfig->getValue(
            SessionConfig::XML_PATH_COOKIE_LIFETIME,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getSessionTimeoutWarning(): int
    {
        return (int) $this->_scopeConfig->getValue(
            self::XPATH_QOLIBER_SESSION_TIMEOUT_WARNING,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getPopupTitle(): string
    {
        return (string) $this->_scopeConfig->getValue(
            self::XPATH_QOLIBER_SESSION_POPUP_TITLE,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getLoggedOutMessage(): string
    {
        return (string) $this->_scopeConfig->getValue(
            self::XPATH_QOLIBER_SESSION_LOGOUT_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }

    public function getLoginButtonTitle(): string
    {
        return (string) $this->_scopeConfig->getValue(
            self::XPATH_QOLIBER_SESSION_BUTTON_TITLE,
            ScopeInterface::SCOPE_STORE
        );
    }
}
