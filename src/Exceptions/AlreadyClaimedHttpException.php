<?php
/**
 * AlreadyClaimedHttpException.php
 *
 * This file is part of the Xpressengine package.
 *
 * PHP version 7
 *
 * @category    Claim
 *
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 *
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Plugins\Claim\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Xpressengine\Plugins\Board\HttpBoardException;

/**
 * AlreadyClaimedHttpException
 *
 * @category    Claim
 *
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 *
 * @link        https://xpressengine.io
 */
class AlreadyClaimedHttpException extends HttpBoardException
{
    protected $message = 'claim::AlreadyClaimed';

    protected $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR;
}
