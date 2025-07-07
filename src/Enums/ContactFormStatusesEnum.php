<?php

namespace SmartCms\Forms\Enums;

enum ContactFormStatusesEnum: string
{
    case NEW = 'new';
    case VIEWED = 'viewed';
    case CLOSED = 'closed';

    public function label(): string
    {
        return match ($this) {
            self::NEW => __('kit::admin.new'),
            self::VIEWED => __('kit::admin.viewed'),
            self::CLOSED => __('kit::admin.closed'),
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::NEW => 'primary',
            self::VIEWED => 'success',
            self::CLOSED => 'danger',
        };
    }
}
