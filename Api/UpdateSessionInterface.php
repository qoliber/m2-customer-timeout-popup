<?php
/**
 * Created by Q-Solutions Studio
 *
 * @category    Qoliber
 * @package     Qoliber_SessionTimeoutPopup
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */
declare(strict_types=1);

namespace Qoliber\SessionTimeoutPopup\Api;

interface UpdateSessionInterface
{
    public function bulkRequest(): void;
}
