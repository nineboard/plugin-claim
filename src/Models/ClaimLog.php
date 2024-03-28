<?php
/**
 * ClaimLog.php
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

namespace Xpressengine\Plugins\Claim\Models;

use Xpressengine\Database\Eloquent\DynamicModel;
use Xpressengine\User\Models\User;

/**
 * ClaimLog
 *
 * @property int    id
 * @property string claimType
 * @property string shortCut
 * @property string targetId
 * @property string uiserId
 * @property string ipaddress
 * @property string message
 * @property string createdAt
 * @property string updatedAt
 *
 * @category    Claim
 *
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2019 Copyright XEHub Corp. <https://www.xehub.io>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 *
 * @link        https://xpressengine.io
 */
class ClaimLog extends DynamicModel
{
    protected $guarded = ['id'];

    /**
     * user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
