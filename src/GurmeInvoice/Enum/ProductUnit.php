<?php

namespace GurmeInvoice\Enum;

class ProductUnit extends BaseEnum
{
    public const C62 = 'C62';
    public const DAY = 'DAY';
    public const MON = 'MON';
    public const ANN = 'ANN';
    public const HUR = 'HUR';
    public const D61 = 'D61';
    public const D62 = 'D62';
    public const PA  = 'PA';
    public const BX  = 'BX';
    public const MGM = 'MGM';
    public const GRM = 'GRM';
    public const KGM = 'KGM';
    public const LTR = 'LTR';
    public const TNE = 'TNE';
    public const NT  = 'NT';
    public const GT  = 'GT';
    public const MMT = 'MMT';
    public const CMT = 'CMT';
    public const MTR = 'MTR';
    public const KTM = 'KTM';
    public const MLT = 'MLT';
    public const MMQ = 'MMQ';
    public const CMK = 'CMK';
    public const CMQ = 'CMQ';
    public const MTK = 'MTK';
    public const MTQ = 'MTQ';
    public const KJO = 'KJO';
    public const CLT = 'CLT';
    public const CT  = 'CT';
    public const KWH = 'KWH';
    public const MWH = 'MWH';
    public const D30 = 'D30';
    public const D40 = 'D40';
    public const LPA = 'LPA';
    public const B32 = 'B32';
    public const NCL = 'NCL';
    public const PR  = 'PR';
    public const R9  = 'R9';
    public const SET = 'SET';
    public const T3  = 'T3';
    public const Q37 = 'Q37';
    public const Q39 = 'Q39';
    public const J39 = 'J39';
    public const G52 = 'G52';
    public const DZN = 'DZN';
    public const DMK = 'DMK';
    public const DMT = 'DMT';
    public const HAR = 'HAR';
    public const LM  = 'LM';

    public static function alias(string $value): string
    {
        $aliases = [
            self::C62 => 'Adet',
            self::DAY => 'Gün',
            self::MON => 'Ay',
            self::ANN => 'Yıl',
            self::HUR => 'Saat',
            self::D61 => 'Dakika',
            self::D62 => 'Saniye',
            self::PA  => 'Paket',
            self::BX  => 'Kutu',
            self::MGM => 'mg',
            self::GRM => 'g',
            self::KGM => 'kg',
            self::LTR => 'lt',
            self::TNE => 'ton',
            self::NT  => 'Net Ton',
            self::GT  => 'Gross ton',
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
            self::CT  => 'KARAT',
            self::KWH => 'KWH',
            self::MWH => 'MWH',
            self::D30 => 'Brüt kalori',
            self::D40 => '1000 lt',
            self::LPA => 'Saf alkol lt',
            self::B32 => 'kg.m2',
            self::NCL => 'Hücre adet',
            self::PR  => 'Çift',
            self::R9  => '1000 m3',
            self::SET => 'Set',
            self::T3  => '1000 adet',
            self::Q37 => 'SCM',
            self::Q39 => 'NCM',
            self::J39 => 'mmBTU',
            self::G52 => 'CM³',
            self::DZN => 'Düzine',
            self::DMK => 'dm2',
            self::DMT => 'dm',
            self::HAR => 'ha',
            self::LM  => 'Metretül (LM)',
        ];

        return $aliases[$value] ?? $value;
    }
}