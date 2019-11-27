<?php
/**
 * User: YL
 * Date: 2019/11/27
 */

namespace Jmhc\Restful\Models;

use Jmhc\Mongodb\Eloquent\Model;
use Jmhc\Restful\Contracts\ConstAttributeInterface;
use Jmhc\Restful\Traits\ModelTrait;

/**
 * 基础 mongo 模型
 * @method ModelTrait initialize()
 * @package Jmhc\Restful\Models
 */
class BaseMongo extends Model implements ConstAttributeInterface
{
    use ModelTrait;

    /**
     * 关闭属性保护
     * @var bool
     */
    protected static $unguarded = true;

    protected function initializeBefore()
    {
        // 设置链接名称
        if (empty($this->connection)) {
            $this->setConnection('mongodb');
        }

        // 设置表名称
        if (empty($this->table)) {
            $this->setTable(static::getSnakePluralName());
        }
    }
}