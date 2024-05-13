<?php

namespace App;

enum TickerStatusEnum: string
{
    const PENDING = 'pending';
    const IN_PROGRESS = 'in_progress';
    const COMPLETED = 'completed';

    public static function description(string $status): string
    {
        return match ($status) {
            self::PENDING => 'O processo ainda não começou',
            self::IN_PROGRESS => 'O processo está em andamento',
            self::COMPLETED => 'O processo foi concluído',
        };
    }
}
