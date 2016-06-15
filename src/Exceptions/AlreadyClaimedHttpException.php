<?php
/**
 * AlreadyClaimedHttpException
 *
 * @category    Board
 * @package     Xpressengine\Plugins\Claim
 * @author      XE Developers (akasima) <osh@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Crop. <http://www.navercorp.com>
 * @license     LGPL-2.1
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Plugins\Claim\Exceptions;

use Xpressengine\Plugins\Board\HttpBoardException;
use Symfony\Component\HttpFoundation\Response;

/**
 * AlreadyClaimedHttpException
 *
 * @category    Board
 * @package     Xpressengine\Plugins\Claim
 * @author      XE Team (akasima) <osh@xpressengine.com>
 * @copyright   2014 Copyright (C) NAVER <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        http://www.xpressengine.com
 */
class AlreadyClaimedHttpException extends HttpBoardException
{
    protected $message = 'claim::AlreadyClaimed';
    protected $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR;
}
