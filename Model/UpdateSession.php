<?php
/**
 * Created by Q-Solutions Studio
 *
 * @category    Qoliber
 * @package     Qoliber_SessionTimeoutPopup
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

declare(strict_types=1);

namespace Qoliber\SessionTimeoutPopup\Model;

use Magento\Customer\Model\Session;
use Qoliber\SessionTimeoutPopup\Api\UpdateSessionInterface;

class UpdateSession implements UpdateSessionInterface
{
    public function __construct(
        protected Session $customerSession
    ) {

    }

    public function bulkRequest(): void
    {
        $this->customerSession->regenerateId();
    }
}
