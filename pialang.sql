-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `pialang` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pialang`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `clients` (`id`, `name`, `address`, `phone`, `email`, `pic`, `phone_pic`, `deleted_at`, `created_at`, `updated_at`) VALUES
('MIT33317498',	'Farhan Mustaqim',	'Cluster Citayam Grande 8, Bogor',	'0811111112',	'farhan@gmail.com',	'Faisal Rahman',	'081111119',	NULL,	'2020-09-20 22:53:45',	'2020-09-21 09:08:11'),
('MIT40035553',	'Faisal Ramlan',	'Margonda, Depok',	'08232323232',	'rahman@maman.com',	'Adrian',	'0812121212',	NULL,	'2020-09-20 22:59:12',	'2020-09-20 22:59:12');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `instructs`;
CREATE TABLE `instructs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `quotation_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insured_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insured` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `territorial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_type` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premium` int(11) NOT NULL,
  `policy_cost` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `signfor` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmby` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `instructs` (`id`, `date`, `quotation_id`, `insured_id`, `insurance_id`, `insured`, `period`, `contract_details`, `scope`, `territorial`, `employee_details`, `vehicle_details`, `cover_type`, `coverage`, `currency`, `premium`, `policy_cost`, `rate`, `warranty`, `other`, `signfor`, `confirmby`, `created_at`, `updated_at`) VALUES
(1,	'2020-09-30',	'1',	'TERT72502146',	'BINA98113801',	'<p><strong>SOLAR ALERT ENERGY, PT</strong> as Main Contractor and/or Consulting Engineers and/or Consultants and/or Man Power Supply.</p><p><strong>Address at</strong>:<br>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</p>',	'<p>08 (Eight) months from 18 July 2020 up to 18 March 2021<br>(11.59 am Jakarta Local Standard time both days inclusive)</p>',	'<figure class=\"table\"><table><tbody><tr><td>Principal</td><td>PC KETAPANG II LTD</td></tr><tr><td>Title</td><td>Provision of Surface Wellhead Equipment Supply &amp; Services</td></tr><tr><td>Number</td><td>4850000312</td></tr><tr><td>Risk Location</td><td>Anywhere within PRINCIPAL and/or their Affiliate’s Project Site<br>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</td></tr><tr><td>Value</td><td>USD 711,606. 84</td></tr></tbody></table></figure>',	'Part Drilling Unit, Wellhead Services',	'Indonesian Area',	'<p>Number ….<br>Payroll ….</p>',	'<p>5</p>',	'<p><strong>COMBINED LIABILITY INSURANCE</strong></p><ul><li>Section I: Comprehensive General Liability Insurance including Automobile Third Party Liability Insurance</li><li>Section II: Workmen’s Compensation Insurance</li><li>Section III : Employers Liability Insurance</li></ul>',	'<p>As per Original policy wording and/or any reputable underwriters Policy Wording.</p><p><strong>SECTION I: COMPREHENSIVE GENERAL LIABILITY INSURANCE (INCLUDING AUTOMOBILE THIRD PARTY LIABILITY INS.)</strong><br>Coverage : To indemnify the Insured against all sums which the Insured shall become legally liable to pay to any third party as damages in respect of:</p><ol><li>Accidental bodily injury to any person.</li><li>Accidental loss or damage to material property.<br>Happening in connection with the business and vehicle used/activity (owned, leased, or hired) occuring within Territorial Limits during the Period of Insurance/Contract.</li></ol><p>Limit of Liability: <strong>USD 1,000,000.00 </strong>anyone occurence for bodily injury and/or property damage combined single limit with Automobile Third Party Liability</p><p>Deductible: <strong>USD 2,500.00 </strong>anyone occurence for Third Party\'s Property Damage only</p><p><strong>SECTION II: WORKMEN\'S COMPENSATION AND OCCUPATIONAL DISEASE INSURANCE</strong><br>Coverage: Lump sum compensation for any employee of the insured who sustained bodily injury by accident arising out of in the course of his employment with the Insured in the business, occuring within territorial limit and during period of insurance Including and under regulations:</p><ul><li>JAMSOSTEK Program [UU No. 3/1992]</li><li>Industrial Accident Security [PP No. 14/1993]</li><li>Disease in related to work [PP No. 22/1993]</li><li>All any future update of Government Regulation of Republic of Indonesia [PP No. 65/2005, PP No. 76/2007, etc]</li><li>Surat Edaran Menteri Tenaga Kerja dan Transmigrasi No. 133/MEN/PPK-NK/V/2007]→for Death Benefits including Sudden Death at Work Place</li></ul><p>Limit of Liability:&nbsp;</p><ul><li><strong>As per PERTAMINA Benefit</strong> in excess of BPJS Ketenagakerjaan for Local Employee</li><li><strong>As per PERTAMINA Benefit</strong> for Expatriates Employee</li></ul><p><strong>SECTION III: EMPLOYERS LIABILITY</strong><br>Coverage: Covering legal liability of the employer for damages (including claimant cost and expenses) in respect of bodily injury and/or disease sustained by any person under contract of service or apprenticeship with the employer, arising out and in the course of his employment with the employer in connection with business and occuring within the Territorial Limits</p><p>Limit of Liability: <strong>USD 250,000.00 </strong>anyone occurence and in aggregate limit with Section II for the whole period</p><p>Deductible <strong>NIL: </strong>anyone occurence</p><p>TERMS &amp; CONDITIONS: <strong>Section I &amp; III</strong></p><ul><li>Claim Made Basis of Indemnity</li><li>Borrow Servant Endorsement (subject to declaration of company involved)</li><li>Fire and Explosion Liability Clause (sub Limit USD 500,000.00)</li><li>Cross Liability Clause (as mutually agreed max. 25%)</li><li>Removal of Wreck and /or debris and renewal of any faulty weld (USD 300,000 for Onshore ad USD 500,000 for Offshore)</li></ul>',	'USD',	1725,	125000,	14950,	'14 (Fourteen) days from the invoice released',	'<ul><li>L/R Nil for the past 3 years</li><li>Scope of Work as per contract</li></ul>',	'<p><strong>URUN PROTEKSI</strong></p><p>&nbsp;</p><p><strong>Anas Dairibi</strong><br>Corp Commercial Risk</p>',	'<p><strong>SINAR MAS JAYA RAGA, PT</strong></p><p>&nbsp;</p><p><strong>Siapa aja</strong><br>Commercial Risk</p>',	'2020-09-29 19:01:08',	'2020-09-29 19:01:08');

DROP TABLE IF EXISTS `insurances`;
CREATE TABLE `insurances` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `insurances` (`id`, `name`, `office`, `address`, `phone`, `email`, `pic`, `phone_pic`, `deleted_at`, `created_at`, `updated_at`) VALUES
('BINA98113801',	'PT. Sinar Mas Jaya  Raga',	'Kab. Bogor',	'Bojong Gede, Kab. Bogor',	'021202020',	'sinar@masmas.com',	'Mas Sinar Mas',	'0888121212',	NULL,	'2020-09-21 00:21:39',	'2020-09-21 09:58:38');

DROP TABLE IF EXISTS `insureds`;
CREATE TABLE `insureds` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `insureds` (`id`, `name`, `address`, `phone`, `email`, `pic`, `phone_pic`, `client_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
('TERT55906870',	'Fakhri Dz',	'Pamulang, Tangsel',	'08981919191',	'fakhri@gmail.com',	'Mohamad Hidayat',	'08991919190',	'MIT33317498',	NULL,	'2020-09-21 08:20:22',	'2020-09-21 10:20:48'),
('TERT72502146',	'SOLAR ALERT ENERGY, PT',	'Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi',	'08888888',	'solar@alergy.com',	'Fakhri',	'0892929292',	'MIT33317498',	NULL,	'2020-09-25 15:45:33',	'2020-09-25 15:45:33');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2020_09_21_010959_create_client_table',	2),
(6,	'2020_09_21_031356_create_insurance_table',	3),
(7,	'2020_09_21_044346_create_insured_table',	4),
(8,	'2020_09_22_092937_create_placing_table',	5),
(9,	'2020_09_22_124930_create_tests_table',	6),
(10,	'2020_09_24_030256_create_quotation_table',	7),
(11,	'2020_09_29_095348_create_instruct_table',	8);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `placings`;
CREATE TABLE `placings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `insurance_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insured` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `territorial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_type` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `compensation` int(11) NOT NULL,
  `warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `signfor` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmby` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `placings` (`id`, `date`, `insurance_id`, `status`, `insured`, `period`, `contract_details`, `scope`, `territorial`, `employee_details`, `vehicle_details`, `cover_type`, `coverage`, `rate`, `compensation`, `warranty`, `remarks`, `signfor`, `confirmby`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'2020-09-22',	'BINA98113801',	'REJECTED',	'<p><strong>SOLAR ALERT ENERGY, PT</strong> as Main Contractor and/or Consulting Engineers and/or Consultants and/or Man Power Supply.</p><p><strong>Address at:</strong><br>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</p>',	'<p>08 (Eight) months from 18 July 2020 up to 18 March 2021<br>(11.59 am Jakarta Local Standard time both days inclusive)</p>',	'<figure class=\"table\"><table><tbody><tr><td>Principal</td><td>PC KETAPANG II LTD</td></tr><tr><td>Title</td><td>Provision of Surface Wellhead Equipment Supply &amp; Services</td></tr><tr><td>Number</td><td>4850000312</td></tr><tr><td>Risk Location</td><td>Anywhere within PRINCIPAL and/or their Affiliate’s Project Site<br>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</td></tr><tr><td>Value</td><td>USD 711,606. 84</td></tr></tbody></table></figure>',	'Part Drilling Unit, Wellhead Services',	'Indonesian Area',	'<p>Number ….<br>Total Payroll ….</p>',	'<p>-</p>',	'<p><strong>COMBINED LIABILITY INSURANCE</strong></p><ul><li>Section I: Comprehensive General Liability Insurance including Automobile Third Party Liability Insurance</li><li>Section II: Workmen’s Compensation Insurance</li><li>Section III : Employers Liability Insurance</li></ul>',	'<p>As per Original policy wording and/or any reputable underwriters Policy Wording.</p><p><strong>SECTION I: COMPREHENSIVE GENERAL LIABILITY INSURANCE (INCLUDING AUTOMOBILE THIRD PARTY LIABILITY INS.)</strong><br>Coverage : To indemnify the Insured against all sums which the Insured shall become legally liable to pay to any third party as damages in respect of:</p><ol><li>Accidental bodily injury to any person.</li><li>Accidental loss or damage to material property.<br>Happening in connection with the business and vehicle used/activity (owned, leased, or hired) occuring within Territorial Limits during the Period of Insurance/Contract.</li></ol><p>Limit of Liability: <strong>USD 1,000,000.00 </strong>anyone occurence for bodily injury and/or property damage combined single limit with Automobile Third Party Liability</p><p>Deductible: <strong>USD 2,500.00 </strong>anyone occurence for Third Party\'s Property Damage only</p><p><strong>SECTION II: WORKMEN\'S COMPENSATION AND OCCUPATIONAL DISEASE INSURANCE</strong><br>Coverage: Lump sum compensation for any employee of the insured who sustained bodily injury by accident arising out of in the course of his employment with the Insured in the business, occuring within territorial limit and during period of insurance Including and under regulations:</p><ul><li>JAMSOSTEK Program [UU No. 3/1992]</li><li>Industrial Accident Security [PP No. 14/1993]</li><li>Disease in related to work [PP No. 22/1993]</li><li>All any future update of Government Regulation of Republic of Indonesia [PP No. 65/2005, PP No. 76/2007, etc]</li><li>Surat Edaran Menteri Tenaga Kerja dan Transmigrasi No. 133/MEN/PPK-NK/V/2007]→for Death Benefits including Sudden Death at Work Place</li></ul><p>Limit of Liability:&nbsp;</p><ul><li><strong>As per PERTAMINA Benefit</strong> in excess of BPJS Ketenagakerjaan for Local Employee</li><li><strong>As per PERTAMINA Benefit</strong> for Expatriates Employee</li></ul><p><strong>SECTION III: EMPLOYERS LIABILITY</strong><br>Coverage: Covering legal liability of the employer for damages (including claimant cost and expenses) in respect of bodily injury and/or disease sustained by any person under contract of service or apprenticeship with the employer, arising out and in the course of his employment with the employer in connection with business and occuring within the Territorial Limits</p><p>Limit of Liability: <strong>USD 250,000.00 </strong>anyone occurence and in aggregate limit with Section II for the whole period</p><p>Deductible <strong>NIL: </strong>anyone occurence</p><p>TERMS &amp; CONDITIONS: <strong>Section I &amp; III</strong></p><ul><li>Claim Made Basis of Indemnity</li><li>Borrow Servant Endorsement (subject to declaration of company involved)</li><li>Fire and Explosion Liability Clause (sub Limit USD 500,000.00)</li><li>Cross Liability Clause (as mutually agreed max. 25%)</li><li>Removal of Wreck and /or debris and renewal of any faulty weld (USD 300,000 for Onshore ad USD 500,000 for Offshore)</li></ul>',	'<p>Please &nbsp;Your Advice</p>',	26,	'45 (Forty-Five) days from Policy Issuance Dates',	'<ul><li>L/R Nil for the past 5 years</li><li>Scope of Work as per contract</li></ul>',	'<p><strong>MITRA DHARMA SHARIE INDONESIA</strong></p><p>&nbsp;</p><p><strong>Anas Dairibi</strong><br>Commercial Risk</p>',	'',	NULL,	'2020-09-22 05:47:12',	'2020-09-25 07:26:00'),
(2,	'2020-09-24',	'BINA98113801',	'APPROVED',	'<p><strong>SOLAR ALERT ENERGY, PT</strong> as Main Contractor and/or Consulting Engineers and/or Consultants and/or Man Power Supply.</p><p><strong>Address at</strong>:<br>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</p>',	'<p>08 (Eight) months from 18 July 2020 up to 18 March 2021<br>(11.59 am Jakarta Local Standard time both days inclusive)</p>',	'<figure class=\"table\"><table><tbody><tr><td>Principal</td><td>PC KETAPANG II LTD</td></tr><tr><td>Title</td><td>Provision of Surface Wellhead Equipment Supply &amp; Services</td></tr><tr><td>Number</td><td>4850000312</td></tr><tr><td>Risk Location</td><td>Anywhere within PRINCIPAL and/or their Affiliate’s Project Site<br>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</td></tr><tr><td>Value</td><td>USD 711,606. 84</td></tr></tbody></table></figure>',	'Part Drilling Unit, Wellhead Services',	'Indonesian Area',	'<p>Number ….<br>Payroll ….</p>',	'<p>5</p>',	'<p><strong>COMBINED LIABILITY INSURANCE</strong></p><ul><li>Section I: Comprehensive General Liability Insurance including Automobile Third Party Liability Insurance</li><li>Section II: Workmen’s Compensation Insurance</li><li>Section III : Employers Liability Insurance</li></ul>',	'<p>As per Original policy wording and/or any reputable underwriters Policy Wording.</p><p><strong>SECTION I: COMPREHENSIVE GENERAL LIABILITY INSURANCE (INCLUDING AUTOMOBILE THIRD PARTY LIABILITY INS.)</strong><br>Coverage : To indemnify the Insured against all sums which the Insured shall become legally liable to pay to any third party as damages in respect of:</p><ol><li>Accidental bodily injury to any person.</li><li>Accidental loss or damage to material property.<br>Happening in connection with the business and vehicle used/activity (owned, leased, or hired) occuring within Territorial Limits during the Period of Insurance/Contract.</li></ol><p>Limit of Liability: <strong>USD 1,000,000.00 </strong>anyone occurence for bodily injury and/or property damage combined single limit with Automobile Third Party Liability</p><p>Deductible: <strong>USD 2,500.00 </strong>anyone occurence for Third Party\'s Property Damage only</p><p><strong>SECTION II: WORKMEN\'S COMPENSATION AND OCCUPATIONAL DISEASE INSURANCE</strong><br>Coverage: Lump sum compensation for any employee of the insured who sustained bodily injury by accident arising out of in the course of his employment with the Insured in the business, occuring within territorial limit and during period of insurance Including and under regulations:</p><ul><li>JAMSOSTEK Program [UU No. 3/1992]</li><li>Industrial Accident Security [PP No. 14/1993]</li><li>Disease in related to work [PP No. 22/1993]</li><li>All any future update of Government Regulation of Republic of Indonesia [PP No. 65/2005, PP No. 76/2007, etc]</li><li>Surat Edaran Menteri Tenaga Kerja dan Transmigrasi No. 133/MEN/PPK-NK/V/2007]→for Death Benefits including Sudden Death at Work Place</li></ul><p>Limit of Liability:&nbsp;</p><ul><li><strong>As per PERTAMINA Benefit</strong> in excess of BPJS Ketenagakerjaan for Local Employee</li><li><strong>As per PERTAMINA Benefit</strong> for Expatriates Employee</li></ul><p><strong>SECTION III: EMPLOYERS LIABILITY</strong><br>Coverage: Covering legal liability of the employer for damages (including claimant cost and expenses) in respect of bodily injury and/or disease sustained by any person under contract of service or apprenticeship with the employer, arising out and in the course of his employment with the employer in connection with business and occuring within the Territorial Limits</p><p>Limit of Liability: <strong>USD 250,000.00 </strong>anyone occurence and in aggregate limit with Section II for the whole period</p><p>Deductible <strong>NIL: </strong>anyone occurence</p><p>TERMS &amp; CONDITIONS: <strong>Section I &amp; III</strong></p><ul><li>Claim Made Basis of Indemnity</li><li>Borrow Servant Endorsement (subject to declaration of company involved)</li><li>Fire and Explosion Liability Clause (sub Limit USD 500,000.00)</li><li>Cross Liability Clause (as mutually agreed max. 25%)</li><li>Removal of Wreck and /or debris and renewal of any faulty weld (USD 300,000 for Onshore ad USD 500,000 for Offshore)</li></ul>',	'<p>Please &nbsp;Your Advice</p>',	25,	'45 (Forty-Five) days from Policy Issuance Dates',	'<ul><li>L/R Nil for the past 5 years</li><li>Scope of Work as per contract</li></ul>',	'<p><strong>MITRA DHARMA SHARIE INDONESIA</strong></p><p>&nbsp;</p><p><strong>Anas Dairibi</strong><br>Commercial Risk</p>',	'<p><strong>FIRST CLASS INSURANCE COMPANY</strong></p><p>&nbsp;</p><p><strong>Mohammad Hidayats</strong><br>Authorized Signature</p>',	NULL,	'2020-09-23 19:50:23',	'2020-09-23 20:00:01'),
(3,	'2020-09-22',	'BINA98113801',	'UNAPPROVED',	'<p><strong>SOLAR ALERT ENERGY, PT</strong> as Main Contractor and/or Consulting Engineers and/or Consultants and/or Man Power Supply.</p><p><strong>Address at:</strong><br>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</p>',	'<p>08 (Eight) months from 18 July 2020 up to 18 March 2021<br>(11.59 am Jakarta Local Standard time both days inclusive)</p>',	'<figure class=\"table\"><table><tbody><tr><td>Principal</td><td>PC KETAPANG II LTD</td></tr><tr><td>Title</td><td>Provision of Surface Wellhead Equipment Supply &amp; Services</td></tr><tr><td>Number</td><td>4850000312</td></tr><tr><td>Risk Location</td><td>Anywhere within PRINCIPAL and/or their Affiliate’s Project Site<br>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</td></tr><tr><td>Value</td><td>USD 711,606. 84</td></tr></tbody></table></figure>',	'Part Drilling Unit, Wellhead Services',	'Indonesian Area',	'<p>Number ….<br>Total Payroll ….</p>',	'<p>-</p>',	'<p><strong>COMBINED LIABILITY INSURANCE</strong></p><ul><li>Section I: Comprehensive General Liability Insurance including Automobile Third Party Liability Insurance</li><li>Section II: Workmen’s Compensation Insurance</li><li>Section III : Employers Liability Insurance</li></ul>',	'<p>As per Original policy wording and/or any reputable underwriters Policy Wording.</p><p><strong>SECTION I: COMPREHENSIVE GENERAL LIABILITY INSURANCE (INCLUDING AUTOMOBILE THIRD PARTY LIABILITY INS.)</strong><br>Coverage : To indemnify the Insured against all sums which the Insured shall become legally liable to pay to any third party as damages in respect of:</p><ol><li>Accidental bodily injury to any person.</li><li>Accidental loss or damage to material property.<br>Happening in connection with the business and vehicle used/activity (owned, leased, or hired) occuring within Territorial Limits during the Period of Insurance/Contract.</li></ol><p>Limit of Liability: <strong>USD 1,000,000.00 </strong>anyone occurence for bodily injury and/or property damage combined single limit with Automobile Third Party Liability</p><p>Deductible: <strong>USD 2,500.00 </strong>anyone occurence for Third Party\'s Property Damage only</p><p><strong>SECTION II: WORKMEN\'S COMPENSATION AND OCCUPATIONAL DISEASE INSURANCE</strong><br>Coverage: Lump sum compensation for any employee of the insured who sustained bodily injury by accident arising out of in the course of his employment with the Insured in the business, occuring within territorial limit and during period of insurance Including and under regulations:</p><ul><li>JAMSOSTEK Program [UU No. 3/1992]</li><li>Industrial Accident Security [PP No. 14/1993]</li><li>Disease in related to work [PP No. 22/1993]</li><li>All any future update of Government Regulation of Republic of Indonesia [PP No. 65/2005, PP No. 76/2007, etc]</li><li>Surat Edaran Menteri Tenaga Kerja dan Transmigrasi No. 133/MEN/PPK-NK/V/2007]→for Death Benefits including Sudden Death at Work Place</li></ul><p>Limit of Liability:&nbsp;</p><ul><li><strong>As per PERTAMINA Benefit</strong> in excess of BPJS Ketenagakerjaan for Local Employee</li><li><strong>As per PERTAMINA Benefit</strong> for Expatriates Employee</li></ul><p><strong>SECTION III: EMPLOYERS LIABILITY</strong><br>Coverage: Covering legal liability of the employer for damages (including claimant cost and expenses) in respect of bodily injury and/or disease sustained by any person under contract of service or apprenticeship with the employer, arising out and in the course of his employment with the employer in connection with business and occuring within the Territorial Limits</p><p>Limit of Liability: <strong>USD 250,000.00 </strong>anyone occurence and in aggregate limit with Section II for the whole period</p><p>Deductible <strong>NIL: </strong>anyone occurence</p><p>TERMS &amp; CONDITIONS: <strong>Section I &amp; III</strong></p><ul><li>Claim Made Basis of Indemnity</li><li>Borrow Servant Endorsement (subject to declaration of company involved)</li><li>Fire and Explosion Liability Clause (sub Limit USD 500,000.00)</li><li>Cross Liability Clause (as mutually agreed max. 25%)</li><li>Removal of Wreck and /or debris and renewal of any faulty weld (USD 300,000 for Onshore ad USD 500,000 for Offshore)</li></ul>',	'<p>Please &nbsp;Your Advice</p>',	25,	'45 (Forty-Five) days from Policy Issuance Dates',	'<ul><li>L/R Nil for the past 5 years</li><li>Scope of Work as per contract</li></ul>',	'<p><strong>MITRA DHARMA SHARIE INDONESIA</strong></p><p>&nbsp;</p><p><strong>Anas Dairibi</strong><br>Commercial Risk</p>',	'<p><strong>PT. Sinar Mas Jaya Raga</strong></p><p>&nbsp;</p><p><strong>Faisal Rahman</strong><br>Commercial Risk</p>',	NULL,	'2020-09-25 07:03:29',	'2020-09-25 07:03:29'),
(4,	'2020-09-26',	'BINA98113801',	'UNAPPROVED',	'<p><strong>SOLAR ALERT ENERGY, PT</strong> as Main Contractor and/or Consulting Engineers and/or Consultants and/or Man Power Supply.</p><p><strong>Address at:</strong><br>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</p>',	'<p>08 (Eight) months from 18 July 2020 up to 18 March 2021<br>(11.59 am Jakarta Local Standard time both days inclusive)</p>',	'<figure class=\"table\"><table><tbody><tr><td>Principal</td><td>PC KETAPANG II LTD</td></tr><tr><td>Title</td><td>Provision of Surface Wellhead Equipment Supply &amp; Services</td></tr><tr><td>Number</td><td>4850000312</td></tr><tr><td>Risk Location</td><td>Anywhere within PRINCIPAL and/or their Affiliate’s Project Site<br>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</td></tr><tr><td>Value</td><td>USD 711,606. 84</td></tr></tbody></table></figure>',	'Part Drilling Unit, Wellhead Services',	'Indonesian Area',	'<p>Number ….<br>Total Payroll …</p>',	'<p>-</p>',	'<p><strong>COMBINED LIABILITY INSURANCE</strong></p><ul><li>Section I: Comprehensive General Liability Insurance including Automobile Third Party Liability Insurance</li><li>Section II: Workmen’s Compensation Insurance</li><li>Section III : Employers Liability Insurance</li></ul>',	'<p>As per Original policy wording and/or any reputable underwriters Policy Wording.</p><p><strong>SECTION I: COMPREHENSIVE GENERAL LIABILITY INSURANCE (INCLUDING AUTOMOBILE THIRD PARTY LIABILITY INS.)</strong><br>Coverage : To indemnify the Insured against all sums which the Insured shall become legally liable to pay to any third party as damages in respect of:</p><ol><li>Accidental bodily injury to any person.</li><li>Accidental loss or damage to material property.<br>Happening in connection with the business and vehicle used/activity (owned, leased, or hired) occuring within Territorial Limits during the Period of Insurance/Contract.</li></ol><p>Limit of Liability: <strong>USD 1,000,000.00 </strong>anyone occurence for bodily injury and/or property damage combined single limit with Automobile Third Party Liability</p><p>Deductible: <strong>USD 2,500.00 </strong>anyone occurence for Third Party\'s Property Damage only</p><p><strong>SECTION II: WORKMEN\'S COMPENSATION AND OCCUPATIONAL DISEASE INSURANCE</strong><br>Coverage: Lump sum compensation for any employee of the insured who sustained bodily injury by accident arising out of in the course of his employment with the Insured in the business, occuring within territorial limit and during period of insurance Including and under regulations:</p><ul><li>JAMSOSTEK Program [UU No. 3/1992]</li><li>Industrial Accident Security [PP No. 14/1993]</li><li>Disease in related to work [PP No. 22/1993]</li><li>All any future update of Government Regulation of Republic of Indonesia [PP No. 65/2005, PP No. 76/2007, etc]</li><li>Surat Edaran Menteri Tenaga Kerja dan Transmigrasi No. 133/MEN/PPK-NK/V/2007]→for Death Benefits including Sudden Death at Work Place</li></ul><p>Limit of Liability:&nbsp;</p><ul><li><strong>As per PERTAMINA Benefit</strong> in excess of BPJS Ketenagakerjaan for Local Employee</li><li><strong>As per PERTAMINA Benefit</strong> for Expatriates Employee</li></ul><p><strong>SECTION III: EMPLOYERS LIABILITY</strong><br>Coverage: Covering legal liability of the employer for damages (including claimant cost and expenses) in respect of bodily injury and/or disease sustained by any person under contract of service or apprenticeship with the employer, arising out and in the course of his employment with the employer in connection with business and occuring within the Territorial Limits</p><p>Limit of Liability: <strong>USD 250,000.00 </strong>anyone occurence and in aggregate limit with Section II for the whole period</p><p>Deductible <strong>NIL: </strong>anyone occurence</p><p>TERMS &amp; CONDITIONS: <strong>Section I &amp; III</strong></p><ul><li>Claim Made Basis of Indemnity</li><li>Borrow Servant Endorsement (subject to declaration of company involved)</li><li>Fire and Explosion Liability Clause (sub Limit USD 500,000.00)</li><li>Cross Liability Clause (as mutually agreed max. 25%)</li><li>Removal of Wreck and /or debris and renewal of any faulty weld (USD 300,000 for Onshore ad USD 500,000 for Offshore)</li></ul>',	'<p>Please &nbsp;Your Advice</p>',	25,	'45 (Forty-Five) days from Policy Issuance Dates',	'<ul><li>L/R Nil for the past 5 years</li><li>Scope of Work as per contract</li></ul>',	'<p><strong>MITRA DHARMA SHARIE INDONESIA</strong></p><p>&nbsp;</p><p><strong>Anas Dairibi</strong><br>Commercial Risk</p>',	'<p><strong>PT. Sinar Mas Jaya Raga</strong></p><p>&nbsp;</p><p><strong>Faisal Rahman</strong><br>Commercial Risk</p>',	NULL,	'2020-09-25 15:30:47',	'2020-09-25 15:30:47');

DROP TABLE IF EXISTS `quotations`;
CREATE TABLE `quotations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `insured_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `insured` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `contract_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `territorial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_type` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `warranty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `signfor` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmby` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `quotations` (`id`, `insured_id`, `status`, `date`, `insured`, `period`, `contract_details`, `scope`, `territorial`, `employee_details`, `vehicle_details`, `cover_type`, `coverage`, `rate`, `warranty`, `remarks`, `signfor`, `confirmby`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1,	'TERT72502146',	'UNAPPROVED',	'2020-09-27',	'<p><strong>SOLAR ALERT ENERGY, PT</strong> as Main Contractor and/or Consulting Engineers and/or Consultants and/or Man Power Supply.</p><p><strong>Address at</strong>:<br>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</p>',	'<p>08 (Eight) months from 18 July 2020 up to 18 March 2021<br>(11.59 am Jakarta Local Standard time both days inclusive)</p>',	'<figure class=\"table\"><table><tbody><tr><td>Principal</td><td>PC KETAPANG II LTD</td></tr><tr><td>Title</td><td>Provision of Surface Wellhead Equipment Supply &amp; Services</td></tr><tr><td>Number</td><td>4850000312</td></tr><tr><td>Risk Location</td><td>Anywhere within PRINCIPAL and/or their Affiliate’s Project Site<br>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</td></tr><tr><td>Value</td><td>USD 711,606. 84</td></tr></tbody></table></figure>',	'Part Drilling Unit, Wellhead Services',	'Indonesian Area',	'<p>Number ….<br>Payroll ….</p>',	'<p>5</p>',	'<p><strong>COMBINED LIABILITY INSURANCE</strong></p><ul><li>Section I: Comprehensive General Liability Insurance including Automobile Third Party Liability Insurance</li><li>Section II: Workmen’s Compensation Insurance</li><li>Section III : Employers Liability Insurance</li></ul>',	'<p>As per Original policy wording and/or any reputable underwriters Policy Wording.</p><p><strong>SECTION I: COMPREHENSIVE GENERAL LIABILITY INSURANCE (INCLUDING AUTOMOBILE THIRD PARTY LIABILITY INS.)</strong><br>Coverage : To indemnify the Insured against all sums which the Insured shall become legally liable to pay to any third party as damages in respect of:</p><ol><li>Accidental bodily injury to any person.</li><li>Accidental loss or damage to material property.<br>Happening in connection with the business and vehicle used/activity (owned, leased, or hired) occuring within Territorial Limits during the Period of Insurance/Contract.</li></ol><p>Limit of Liability: <strong>USD 1,000,000.00 </strong>anyone occurence for bodily injury and/or property damage combined single limit with Automobile Third Party Liability</p><p>Deductible: <strong>USD 2,500.00 </strong>anyone occurence for Third Party\'s Property Damage only</p><p><strong>SECTION II: WORKMEN\'S COMPENSATION AND OCCUPATIONAL DISEASE INSURANCE</strong><br>Coverage: Lump sum compensation for any employee of the insured who sustained bodily injury by accident arising out of in the course of his employment with the Insured in the business, occuring within territorial limit and during period of insurance Including and under regulations:</p><ul><li>JAMSOSTEK Program [UU No. 3/1992]</li><li>Industrial Accident Security [PP No. 14/1993]</li><li>Disease in related to work [PP No. 22/1993]</li><li>All any future update of Government Regulation of Republic of Indonesia [PP No. 65/2005, PP No. 76/2007, etc]</li><li>Surat Edaran Menteri Tenaga Kerja dan Transmigrasi No. 133/MEN/PPK-NK/V/2007]→for Death Benefits including Sudden Death at Work Place</li></ul><p>Limit of Liability:&nbsp;</p><ul><li><strong>As per PERTAMINA Benefit</strong> in excess of BPJS Ketenagakerjaan for Local Employee</li><li><strong>As per PERTAMINA Benefit</strong> for Expatriates Employee</li></ul><p><strong>SECTION III: EMPLOYERS LIABILITY</strong><br>Coverage: Covering legal liability of the employer for damages (including claimant cost and expenses) in respect of bodily injury and/or disease sustained by any person under contract of service or apprenticeship with the employer, arising out and in the course of his employment with the employer in connection with business and occuring within the Territorial Limits</p><p>Limit of Liability: <strong>USD 250,000.00 </strong>anyone occurence and in aggregate limit with Section II for the whole period</p><p>Deductible <strong>NIL: </strong>anyone occurence</p><p>TERMS &amp; CONDITIONS: <strong>Section I &amp; III</strong></p><ul><li>Claim Made Basis of Indemnity</li><li>Borrow Servant Endorsement (subject to declaration of company involved)</li><li>Fire and Explosion Liability Clause (sub Limit USD 500,000.00)</li><li>Cross Liability Clause (as mutually agreed max. 25%)</li><li>Removal of Wreck and /or debris and renewal of any faulty weld (USD 300,000 for Onshore ad USD 500,000 for Offshore)</li></ul>',	'<ul><li>Section I (GCL): USD 1,500.00 / year</li><li>Section II (WCA/EL): 1.00% Total Payroll along Contract with Minimum Premium at USD 500.00</li><li>Section III (EL): USD 500.00 / year</li></ul>',	'14 (Fourteen) days from Policy Issuance date',	'<ul><li>L/R Nil for the past 3 years</li><li>Scope of Work as per contract</li></ul>',	'<p><strong>URUN PROTEKSI</strong></p><p>&nbsp;</p><p><strong>Anas Dairibi</strong><br>Corp Commercial Risk</p>',	'<p><strong>SOLAR ALERT ENERGY, PT</strong></p><p>&nbsp;</p><p><strong>Siapa aja</strong><br>Commercial Risk</p>',	NULL,	'2020-09-25 15:58:56',	'2020-09-25 15:58:56'),
(2,	'TERT72502146',	'UNAPPROVED',	'2020-09-27',	'<p><strong>SOLAR ALERT ENERGY, PT</strong> as Main Contractor and/or Consulting Engineers and/or Consultants and/or Man Power Supply.</p><p><strong>Address at</strong>:<br>Jl Kenari II No.12, Kawasan Industri Delta Silicon V, Lippo Cikarang, Bekasi</p>',	'<p>08 (Eight) months from 18 July 2020 up to 18 March 2021<br>(11.59 am Jakarta Local Standard time both days inclusive)</p>',	'<figure class=\"table\"><table><tbody><tr><td>Principal</td><td>PC KETAPANG II LTD</td></tr><tr><td>Title</td><td>Provision of Surface Wellhead Equipment Supply &amp; Services</td></tr><tr><td>Number</td><td>4850000312</td></tr><tr><td>Risk Location</td><td>Anywhere within PRINCIPAL and/or their Affiliate’s Project Site<br>mainly at Lamongan Shorebase Surabaya and Jakarta Office.</td></tr><tr><td>Value</td><td>USD 711,606. 84</td></tr></tbody></table></figure>',	'Part Drilling Unit, Wellhead Services',	'Indonesian Area',	'<p>Number ….<br>Payroll ….</p>',	'<p>5</p>',	'<p><strong>COMBINED LIABILITY INSURANCE</strong></p><ul><li>Section I: Comprehensive General Liability Insurance including Automobile Third Party Liability Insurance</li><li>Section II: Workmen’s Compensation Insurance</li><li>Section III : Employers Liability Insurance</li></ul>',	'<p>As per Original policy wording and/or any reputable underwriters Policy Wording.</p><p><strong>SECTION I: COMPREHENSIVE GENERAL LIABILITY INSURANCE (INCLUDING AUTOMOBILE THIRD PARTY LIABILITY INS.)</strong><br>Coverage : To indemnify the Insured against all sums which the Insured shall become legally liable to pay to any third party as damages in respect of:</p><ol><li>Accidental bodily injury to any person.</li><li>Accidental loss or damage to material property.<br>Happening in connection with the business and vehicle used/activity (owned, leased, or hired) occuring within Territorial Limits during the Period of Insurance/Contract.</li></ol><p>Limit of Liability: <strong>USD 1,000,000.00 </strong>anyone occurence for bodily injury and/or property damage combined single limit with Automobile Third Party Liability</p><p>Deductible: <strong>USD 2,500.00 </strong>anyone occurence for Third Party\'s Property Damage only</p><p><strong>SECTION II: WORKMEN\'S COMPENSATION AND OCCUPATIONAL DISEASE INSURANCE</strong><br>Coverage: Lump sum compensation for any employee of the insured who sustained bodily injury by accident arising out of in the course of his employment with the Insured in the business, occuring within territorial limit and during period of insurance Including and under regulations:</p><ul><li>JAMSOSTEK Program [UU No. 3/1992]</li><li>Industrial Accident Security [PP No. 14/1993]</li><li>Disease in related to work [PP No. 22/1993]</li><li>All any future update of Government Regulation of Republic of Indonesia [PP No. 65/2005, PP No. 76/2007, etc]</li><li>Surat Edaran Menteri Tenaga Kerja dan Transmigrasi No. 133/MEN/PPK-NK/V/2007]→for Death Benefits including Sudden Death at Work Place</li></ul><p>Limit of Liability:&nbsp;</p><ul><li><strong>As per PERTAMINA Benefit</strong> in excess of BPJS Ketenagakerjaan for Local Employee</li><li><strong>As per PERTAMINA Benefit</strong> for Expatriates Employee</li></ul><p><strong>SECTION III: EMPLOYERS LIABILITY</strong><br>Coverage: Covering legal liability of the employer for damages (including claimant cost and expenses) in respect of bodily injury and/or disease sustained by any person under contract of service or apprenticeship with the employer, arising out and in the course of his employment with the employer in connection with business and occuring within the Territorial Limits</p><p>Limit of Liability: <strong>USD 250,000.00 </strong>anyone occurence and in aggregate limit with Section II for the whole period</p><p>Deductible <strong>NIL: </strong>anyone occurence</p><p>TERMS &amp; CONDITIONS: <strong>Section I &amp; III</strong></p><ul><li>Claim Made Basis of Indemnity</li><li>Borrow Servant Endorsement (subject to declaration of company involved)</li><li>Fire and Explosion Liability Clause (sub Limit USD 500,000.00)</li><li>Cross Liability Clause (as mutually agreed max. 25%)</li><li>Removal of Wreck and /or debris and renewal of any faulty weld (USD 300,000 for Onshore ad USD 500,000 for Offshore)</li></ul>',	'<ul><li>Section I</li><li>Section II</li><li>Section III</li></ul>',	'14 (Fourteen) days from Policy Issuance date',	'<ul><li>L/R Nil for the past 3 years</li><li>Scope of Work as per contract</li></ul>',	'<p><strong>URUN PROTEKSI</strong></p><p>&nbsp;</p><p><strong>Mohammad Hidayat</strong><br>Commercial Risk</p>',	'',	NULL,	'2020-09-25 16:03:34',	'2020-09-25 16:03:34');

DROP TABLE IF EXISTS `tests`;
CREATE TABLE `tests` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tests` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'Tes',	'2020-09-22 05:58:02',	'2020-09-22 05:58:02');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Adrian Pratama',	'ian@pialang.com',	NULL,	'$2y$10$eY0t8oQGBla1mdZls7esp.1MuI2.kSXpCJ.wSe.cYUa2rva3zV6yG',	NULL,	'2020-09-20 11:40:07',	'2020-09-20 11:40:07');

-- 2020-09-30 15:20:48
