<?php
/**
 * User: YL
 * Date: 2019/11/12
 */

namespace Jmhc\Restful\Models;

use Hyperf\Database\Model\Builder;
use Hyperf\Database\Model\Model;
use Jmhc\Restful\Contracts\VersionInterface;

/**
 * 版本模型
 * @package Jmhc\Restful\Models
 */
class VersionModel extends BaseModel implements VersionInterface
{
    protected function getIsForceAttribute($value)
    {
        return !! $value;
    }

    /**
     * 获取最新版本信息
     * @return Builder|Model|object|null
     */
    public static function getLastInfo()
    {
        return static::query()
            ->first();
    }
}
