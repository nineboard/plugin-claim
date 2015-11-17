<?php
/**
 * Claim manager controller
 *
 * PHP version 5
 *
 * @category    Claim
 * @package     Claim
 * @author      XE Team (akasima) <osh@xpressengine.com>
 * @copyright   2014 Copyright (C) NAVER <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        http://www.xpressengine.com
 */
namespace Xpressengine\Plugins\Claim;

use App\Sections\CommentSection;
use App\Sections\DynamicFieldSection;
use Input;
use View;
use Redirect;
//use Xpressengine\Keygen\Keygen;
use Exception;
use Presenter;
use App;
use XeDB;
use Xpressengine\Config\ConfigEntity;
use Cfg;
use DynamicField;
use Validator;
use App\Http\Controllers\Controller;

/**
 * Claim manager controller
 *
 * @category    Claim
 * @package     Claim
 * @author      XE Team (akasima) <osh@xpressengine.com>
 * @copyright   2014 Copyright (C) NAVER <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/lgpl-3.0-standalone.html LGPL
 * @link        http://www.xpressengine.com
 */
class ManagerController extends Controller
{

    /**
     * @var ClaimHandler
     */
    protected $handler;

    /**
     * create instance
     */
    public function __construct()
    {
        Presenter::setSettingsSkin('claim');
    }


    /**
     * index
     *
     * @return \Xpressengine\Presenter\RendererInterface
     */
    public function index()
    {
        $wheres = [];
        $orders = [];

        $paginate = app('xe.claim.handler')->paginate($wheres, $orders);

        return Presenter::make('index', [
            'action' => 'index',
            'paginate' => $paginate,
        ]);
    }

    /**
     * delete
     *
     * @return \Xpressengine\Presenter\RendererInterface
     */
    public function delete()
    {
        $id = Input::get('id');

        $this->handler->remove($id);

        return Presenter::makeApi([]);
    }
}
