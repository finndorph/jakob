<?php
/**
 * JAKOB
 *
 * @category   WAYF
 * @package    JAKOB
 * @subpackage Connector
 * @author     Jacob Christiansen <jach@wayf.dk>
 * @copyright  Copyright (c) 2011 Jacob Christiansen, WAYF (http://www.wayf.dk)
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 * @version    $Id$
 * @link       $URL$
 */

/**
 * @namespace
 */
namespace WAYF;

class ClientException extends \Exception {}

define('STATUS_SUCCESS', 0);
define('STATUS_ERROR', 1);
define('STATUS_TIMEOUT', 2);

/**
 * Client interface
 */
interface Client
{
    /**
     * Add background job
     *
     * @param string $name     The name of the job
     * @param string $workload The workload passed to the job
     */
    public function doAsync($name, $workload);
}
