<?php

namespace GurmeInvoice\Enum;

enum ProductUnit: string
{
    case C62 = 'C62';
    case DAY = 'DAY';
    case MON = 'MON';
    case ANN = 'ANN';
    case HUR = 'HUR';
    case D61 = 'D61';
    case D62 = 'D62';
    case PA = 'PA';
    case BX = 'BX';
    case MGM = 'MGM';
    case GRM = 'GRM';
    case KGM = 'KGM';
    case LTR = 'LTR';
    case TNE = 'TNE';
    case NT = 'NT';
    case GT = 'GT';
    case MMT = 'MMT';
    case CMT = 'CMT';
    case MTR = 'MTR';
    case KTM = 'KTM';
    case MLT = 'MLT';
    case MMQ = 'MMQ';
    case CMK = 'CMK';
    case CMQ = 'CMQ';
    case MTK = 'MTK';
    case MTQ = 'MTQ';
    case KJO = 'KJO';
    case CLT = 'CLT';
    case CT = 'CT';
    case KWH = 'KWH';
    case MWH = 'MWH';
    case D30 = 'D30';
    case D40 = 'D40';
    case LPA = 'LPA';
    case B32 = 'B32';
    case NCL = 'NCL';
    case PR = 'PR';
    case R9 = 'R9';
    case SET = 'SET';
    case T3 = 'T3';
    case Q37 = 'Q37';
    case Q39 = 'Q39';
    case J39 = 'J39';
    case G52 = 'G52';
    case DZN = 'DZN';
    case DMK = 'DMK';
    case DMT = 'DMT';
    case HAR = 'HAR';
    case LM = 'LM';

    public function alias(): string
    {
        return match ($this) {
            self::C62 => 'Adet',
            self::DAY => 'Gün',
            self::MON => 'Ay',
            self::ANN => 'Yıl',
            self::HUR => 'Saat',
            self::D61 => 'Dakika',
            self::D62 => 'Saniye',
            self::PA => 'Paket',
            self::BX => 'Kutu',
            self::MGM => 'mg',
            self::GRM => 'g',
            self::KGM => 'kg',
            self::LTR => 'lt',
            self::TNE => 'ton',
            self::NT => 'Net Ton',
            self::GT => 'Gross ton',
            self::MMT => 'mm',
            self::CMT => 'cm',
            self::MTR => 'm',
            self::KTM => 'km',
            self::MLT => 'ml',
            self::MMQ => 'mm3',
            self::CMK => 'cm2',
            self::CMQ => 'cm3',
            self::MTK => 'm2',
            self::MTQ => 'm3',
            self::KJO => 'kJ',
            self::CLT => 'cl',
            self::CT => 'KARAT',
            self::KWH => 'KWH',
            self::MWH => 'MWH',
            self::D30 => 'Brüt kalori',
            self::D40 => '1000 lt',
            self::LPA => 'Saf alkol lt',
            self::B32 => 'kg.m2',
            self::NCL => 'Hücre adet',
            self::PR => 'Çift',
            self::R9 => '1000 m3',
            self::SET => 'Set',
            self::T3 => '1000 adet',
            self::Q37 => 'SCM',
            self::Q39 => 'NCM',
            self::J39 => 'mmBTU',
            self::G52 => 'CM³',
            self::DZN => 'Düzine',
            self::DMK => 'dm2',
            self::DMT => 'dm',
            self::HAR => 'ha',
            self::LM => 'Metretül (LM)',
        };
    }
}
