<?php
/**
 * User: YL
 * Date: 2019/11/12
 */

namespace Jmhc\Restful\Contracts;

/**
 * 版本模型
 * @package Jmhc\Restful\Contracts
 */
interface VersionInterface
{
    // 获取最新版本信息
    public static function getLastInfo();
}
