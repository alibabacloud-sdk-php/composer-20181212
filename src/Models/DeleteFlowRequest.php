<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DeleteFlowRequest extends Model
{
    /**
     * @description The ID of the workflow that you want to delete.
     *
     * @example lc-uf6wvbsyvvl5sy
     *
     * @var string
     */
    public $flowId;
    protected $_name = [
        'flowId' => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
