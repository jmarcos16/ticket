<?php

namespace App;

enum TickerStatusEnum: string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';

    public static function description(string $status): string
    {
        return match ($status) {
            self::PENDING => 'O processo ainda não começou',
            self::IN_PROGRESS => 'O processo está em andamento',
            self::COMPLETED => 'O processo foi concluído',
        };
    }

    public static function toArray(): array
    {
        return [
            self::PENDING,
            self::IN_PROGRESS,
            self::COMPLETED,
        ];
    }
}
