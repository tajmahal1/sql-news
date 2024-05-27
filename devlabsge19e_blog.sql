-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2024 at 11:25 AM
-- Server version: 8.0.36-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devlabsge19e_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_general_ci,
  `hypertexthome` longtext COLLATE utf8mb4_general_ci,
  `hypertextabout` longtext COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `hypertexthome`, `hypertextabout`) VALUES
(1, 'გაანათე', 'საიტი შეიქმნა ერთი მიზნით: მარტივად მოუყაროს თავი სხვადასხვა არგუმენტს და დაეხმაროს საზოგადოებას არგუმენტირებულ პროტესტში.', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int UNSIGNED NOT NULL,
  `topic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `docname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `hypertext` longtext COLLATE utf8mb4_general_ci,
  `shortdesc` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `topic`, `docname`, `title`, `hypertext`, `shortdesc`, `created_at`) VALUES
(14, 'კანონიიი', NULL, 'საქართველოს კანონი „უცხოური გავლენის გამჭვირვალობის შესახებ“', '<p style=\"text-align: left;\"><span style=\"font-size: 10pt;\">პროექტი </span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 10pt;\">საქართველოს კანონი </span><span style=\"font-size: 10pt;\">&bdquo;უცხოური გავლენის გამჭვირვალობის შესახებ&ldquo;</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 1. კანონის მიზანი და მოქმედების სფერო</span></strong></em></span><br /><span style=\"font-size: 10pt;\">1. ეს კანონი უცხოური გავლენის გამჭვირვალობის უზრუნველყოფის</span><br /><span style=\"font-size: 10pt;\">მიზნით აწესრიგებს სუბიექტის უცხოური ძალის ინტერესების გამტარებელ</span><br /><span style=\"font-size: 10pt;\">ორგანიზაციად რეგისტრაციასა და უცხოური ძალის ინტერესების გამტარებელი</span><br /><span style=\"font-size: 10pt;\">ორგანიზაციის საქმიანობის გამჭვირვალობასთან დაკავშირებულ სხვა საკითხებს.</span><br /><span style=\"font-size: 10pt;\">2. ეს კანონი არ ზღუდავს ამ კანონის საფუძველზე უცხოური ძალის</span><br /><span style=\"font-size: 10pt;\">ინტერესების გამტარებელ ორგანიზაციად რეგისტრირებული სუბიექტის</span><br /><span style=\"font-size: 10pt;\">საქმიანობას.</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 2. უცხოური ძალის ინტერესების გამტარებელი ორგანიზაცია</span></strong></em></span><br /><span style=\"font-size: 10pt;\">1. ამ კანონის მიზნებისთვის უცხოური ძალის ინტერესების გამტარებელი</span><br /><span style=\"font-size: 10pt;\">ორგანიზაცია არის:</span><br /><span style=\"font-size: 10pt;\">ა) ისეთი არასამეწარმეო (არაკომერციული) იურიდიული პირი, რომელიც არ</span><br /><span style=\"font-size: 10pt;\">არის დაფუძნებული ადმინისტრაციული ორგანოს მიერ, რომელიც არ არის</span><br /><span style=\"font-size: 10pt;\">&bdquo;სპორტის შესახებ&ldquo; საქართველოს კანონით გათვალისწინებული საქართველოს</span><br /><span style=\"font-size: 10pt;\">ეროვნული სპორტული ფედერაცია ან &bdquo;ადამიანის სისხლისა და მისი</span><br /><span style=\"font-size: 10pt;\">კომპონენტების ხარისხისა და უსაფრთხოების შესახებ&ldquo; საქართველოს კანონით</span><br /><span style=\"font-size: 10pt;\">გათვალისწინებული სისხლის დაწესებულება და რომლის მიერ კალენდარული</span><br /><span style=\"font-size: 10pt;\">წლის განმავლობაში მიღებული მთლიანი შემოსავლის 20%-ზე მეტის წყარო</span><br /><span style=\"font-size: 10pt;\">უცხოური ძალაა;</span><br /><span style=\"font-size: 10pt;\">ბ) &bdquo;მაუწყებლობის შესახებ&ldquo; საქართველოს კანონით გათვალისწინებული</span><br /><span style=\"font-size: 10pt;\">ისეთი მაუწყებელი, რომლის მიერ კალენდარული წლის განმავლობაში მიღებული</span><br /><span style=\"font-size: 10pt;\">მთლიანი შემოსავლის იმ 20%-ზე მეტის წყარო უცხოური ძალაა, რომელშიც არ</span><br /><span style=\"font-size: 10pt;\">შედის სამეწარმეო საზოგადოების ან ინდივიდუალური მეწარმის მიერ</span><br /><span style=\"font-size: 10pt;\">&bdquo;მაუწყებლობის შესახებ&ldquo; საქართველოს კანონის შესაბამისად აღნიშნულ</span><br /><span style=\"font-size: 10pt;\">მაუწყებელში განთავსებული სპონსორობიდან, ტელეშოპინგიდან ან კომერციული</span><br /><span style=\"font-size: 10pt;\">რეკლამიდან მიღებული შემოსავალი;</span><br /><span style=\"font-size: 10pt;\">გ) ისეთი იურიდიული პირი, რომელიც ერთპიროვნულად ან სხვასთან</span><br /><span style=\"font-size: 10pt;\">ერთად ფლობს საქართველოში მოქმედ მასობრივი ინფორმაციის ბეჭდურ</span><br /><span style=\"font-size: 10pt;\">საშუალებას და რომლის მიერ კალენდარული წლის განმავლობაში მიღებული</span><br /><span style=\"font-size: 10pt;\">მთლიანი შემოსავლის იმ 20%-ზე მეტის წყარო უცხოური ძალაა, რომელშიც არ</span><br /><span style=\"font-size: 10pt;\">შედის სამეწარმეო საზოგადოების ან ინდივიდუალური მეწარმის მიერ მასობრივი</span><br /><span style=\"font-size: 10pt;\">ინფორმაციის აღნიშნულ საშუალებაში განთავსებული კომერციული რეკლამიდან</span><br /><span style=\"font-size: 10pt;\">მიღებული შემოსავალი;</span><br /><span style=\"font-size: 10pt;\">დ) ისეთი იურიდიული პირი, რომელიც ერთპიროვნულად ან სხვასთან</span><br /><span style=\"font-size: 10pt;\">ერთად ფლობს ან/და იყენებს მასობრივი ინფორმაციის საქართველოს სახელმწიფო</span><br /><span style=\"font-size: 10pt;\">ენაზე გამავრცელებელი ინტერნეტსაშუალებისთვის განკუთვნილ </span><span style=\"font-size: 10pt;\">2</span><br /><span style=\"font-size: 10pt;\">ინტერნეტდომენს ან/და ინტერნეტჰოსტინგს და რომლის მიერ კალენდარული</span><br /><span style=\"font-size: 10pt;\">წლის განმავლობაში მიღებული მთლიანი შემოსავლის იმ 20%-ზე მეტის წყარო</span><br /><span style=\"font-size: 10pt;\">უცხოური ძალაა, რომელშიც არ შედის სამეწარმეო საზოგადოების ან</span><br /><span style=\"font-size: 10pt;\">ინდივიდუალური მეწარმის მიერ მასობრივი ინფორმაციის აღნიშნულ</span><br /><span style=\"font-size: 10pt;\">საშუალებაში განთავსებული კომერციული რეკლამიდან მიღებული შემოსავალი.</span><br /><span style=\"font-size: 10pt;\">2. ამ მუხლის მიზნებისთვის &bdquo;შემოსავალში&ldquo; იგულისხმება ფულადი თანხა</span><br /><span style=\"font-size: 10pt;\">და ქონებრივი ღირებულების სხვა სახის მატერიალური სიკეთე (ნებისმიერი</span><br /><span style=\"font-size: 10pt;\">მოძრავი ან უძრავი ნივთი). იმ შემოსავლის ღირებულება, რომელიც არ არის</span><br /><span style=\"font-size: 10pt;\">ფულადი თანხა, ამ მუხლის მიზნებისთვის მისი საბაზრო ფასით გამოითვლება.</span><br /><span style=\"font-size: 10pt;\">3. ამ მუხლის პირველი პუნქტის მიზნებისთვის მიიჩნევა, რომ იმავე</span><br /><span style=\"font-size: 10pt;\">პუნქტით გათვალისწინებულმა შესაბამისმა სუბიექტმა მიიღო შემოსავალი, თუ</span><br /><span style=\"font-size: 10pt;\">აღნიშნულ სუბიექტს გადაეცა ფულადი თანხა ან იგი გახდა ქონებრივი</span><br /><span style=\"font-size: 10pt;\">ღირებულების სხვა სახის მატერიალური სიკეთის (ნებისმიერი მოძრავი ან უძრავი</span><br /><span style=\"font-size: 10pt;\">ნივთის) მესაკუთრე ან მოსარგებლე.</span><br /><span style=\"font-size: 10pt;\">4. ამ მუხლის პირველი პუნქტის მიზნებისთვის მიიჩნევა, რომ იმავე</span><br /><span style=\"font-size: 10pt;\">პუნქტით გათვალისწინებული შესაბამისი სუბიექტის მიერ მიღებული</span><br /><span style=\"font-size: 10pt;\">შემოსავლის წყარო უცხოური ძალაა, თუ:</span><br /><span style=\"font-size: 10pt;\">ა) აღნიშნულმა სუბიექტმა უცხოური ძალისგან პირდაპირ ან არაპირდაპირ</span><br /><span style=\"font-size: 10pt;\">მიიღო შემოსავალი;</span><br /><span style=\"font-size: 10pt;\">ბ) აღნიშნულმა სუბიექტმა პირდაპირ ან არაპირდაპირ მიიღო შემოსავალი იმ</span><br /><span style=\"font-size: 10pt;\">იურიდიული პირისგან, რომელმაც უცხოური ძალისგან პირდაპირ ან</span><br /><span style=\"font-size: 10pt;\">არაპირდაპირ მიიღო შემოსავალი;</span><br /><span style=\"font-size: 10pt;\">გ) აღნიშნული შემოსავლის წყარო არ არის იდენტიფიცირებული.</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 3. უცხოური ძალა</span></strong></em></span><br /><span style=\"font-size: 10pt;\">ამ კანონის მიზნებისთვის უცხოური ძალა არის:</span><br /><span style=\"font-size: 10pt;\">ა) უცხო სახელმწიფოს ხელისუფლების სისტემის შემადგენელი სუბიექტი;</span><br /><span style=\"font-size: 10pt;\">ბ) ფიზიკური პირი, რომელიც არ არის საქართველოს მოქალაქე;</span><br /><span style=\"font-size: 10pt;\">გ) იურიდიული პირი, რომელიც არ არის დაფუძნებული საქართველოს</span><br /><span style=\"font-size: 10pt;\">კანონმდებლობის საფუძველზე;</span><br /><span style=\"font-size: 10pt;\">დ) ისეთი ორგანიზაციული წარმონაქმნი (მათ შორის, ფონდი, ასოციაცია,</span><br /><span style=\"font-size: 10pt;\">კორპორაცია, კავშირი, სხვა სახის ორგანიზაცია) ან პირთა სხვა სახის გაერთიანება,</span><br /><span style=\"font-size: 10pt;\">რომელიც დაფუძნებულია უცხო სახელმწიფოს სამართლის ან/და საერთაშორისო</span><br /><span style=\"font-size: 10pt;\">სამართლის საფუძველზე.</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 4. სუბიექტის უცხოური ძალის ინტერესების გამტარებელ</span></strong></em></span><br /><span style=\"font-size: 10pt;\">ორგანიზაციად რეგისტრაცია</span><br /><span style=\"font-size: 10pt;\">1. სუბიექტი, რომელიც აკმაყოფილებს ამ კანონის მე-2 მუხლით დადგენილ</span><br /><span style=\"font-size: 10pt;\">უცხოური ძალის ინტერესების გამტარებელი ორგანიზაციის კრიტერიუმებს,</span><br /><span style=\"font-size: 10pt;\">ვალდებულია, მის მიერ ამ კრიტერიუმების დაკმაყოფილების წლის მომდევნო</span><br /><span style=\"font-size: 10pt;\">კალენდარული წლის იანვრის თვის განმავლობაში საჯარო სამართლის</span><br /><span style=\"font-size: 10pt;\">იურიდიული პირის  იუსტიციის სახლის მეშვეობით წერილობით (მატერიალური</span><br /><span style=\"font-size: 10pt;\">ფორმით) მიმართოს საქართველოს იუსტიციის სამინისტროს მმართველობის</span><br /><span style=\"font-size: 10pt;\">სფეროში მოქმედ საჯარო სამართლის იურიდიულ პირს &ndash; საჯარო რეესტრის</span><br /><span style=\"font-size: 10pt;\">3</span><br /><span style=\"font-size: 10pt;\">ეროვნულ სააგენტოს (შემდგომ  სააგენტო) განცხადებით უცხოური ძალის</span><br /><span style=\"font-size: 10pt;\">ინტერესების გამტარებელ ორგანიზაციად დარეგისტრირების თაობაზე. ამ</span><br /><span style=\"font-size: 10pt;\">შემთხვევაში სააგენტო ვალდებულია, აღნიშნული სუბიექტი 2 სამუშაო დღეში</span><br /><span style=\"font-size: 10pt;\">უზრუნველყოს სათანადო ვებგვერდზე იმგვარი დაშვებით, რომ ამ სუბიექტმა</span><br /><span style=\"font-size: 10pt;\">შეძლოს უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span><br /><span style=\"font-size: 10pt;\">რეგისტრაციის შესახებ განაცხადის (შემდგომ  განაცხადი) ელექტრონულად,</span><br /><span style=\"font-size: 10pt;\">საქართველოს იუსტიციის მინისტრის მიერ დადგენილი ფორმის დაცვით შევსება</span><br /><span style=\"font-size: 10pt;\">და სააგენტოსთვის წარდგენა.</span><br /><span style=\"font-size: 10pt;\">2. ამ მუხლის პირველი პუნქტით გათვალისწინებულ სათანადო ვებგვერდზე</span><br /><span style=\"font-size: 10pt;\">სუბიექტის დაშვებიდან 10 სამუშაო დღეში იგი ვალდებულია, ელექტრონულად,</span><br /><span style=\"font-size: 10pt;\">საქართველოს იუსტიციის მინისტრის მიერ დადგენილი ფორმის დაცვით შეავსოს</span><br /><span style=\"font-size: 10pt;\">და სააგენტოს წარუდგინოს განაცხადი.</span><br /><span style=\"font-size: 10pt;\">3. განაცხადის ავტორი ვალდებულია განაცხადში, რომელიც იმავდროულად</span><br /><span style=\"font-size: 10pt;\">განაცხადის ავტორის საფინანსო დეკლარაციაც არის, ასახოს შემდეგი ინფორმაცია</span><br /><span style=\"font-size: 10pt;\">(ასეთი ინფორმაციის არსებობის შემთხვევაში):</span><br /><span style=\"font-size: 10pt;\">ა) განაცხადის ავტორის საიდენტიფიკაციო მონაცემები;</span><br /><span style=\"font-size: 10pt;\">ბ) განაცხადის ავტორის ადგილსამყოფლის მისამართი;</span><br /><span style=\"font-size: 10pt;\">გ) განაცხადის ავტორის ვებგვერდის მისამართი;</span><br /><span style=\"font-size: 10pt;\">დ) ინფორმაცია განაცხადის ავტორის მიერ წინა კალენდარული წლის</span><br /><span style=\"font-size: 10pt;\">განმავლობაში მიღებული ნებისმიერი ფულადი თანხისა და სხვა სახის</span><br /><span style=\"font-size: 10pt;\">მატერიალური სარგებლის წყაროს, ოდენობისა და მიზნობრიობის შესახებ;</span><br /><span style=\"font-size: 10pt;\">ე) ინფორმაცია განაცხადის ავტორის მიერ წინა კალენდარული წლის</span><br /><span style=\"font-size: 10pt;\">განმავლობაში დახარჯული ნებისმიერი ფულადი თანხის ოდენობისა და</span><br /><span style=\"font-size: 10pt;\">მიზნობრიობის შესახებ;</span><br /><span style=\"font-size: 10pt;\">ვ) განაცხადის შევსების თარიღი.</span><br /><span style=\"font-size: 10pt;\">4. სააგენტო ვალდებულია, მისთვის განაცხადის წარდგენიდან 30 სამუშაო</span><br /><span style=\"font-size: 10pt;\">დღეში გამოიკვლიოს და შეისწავლოს განაცხადი, რისთვისაც საქართველოს</span><br /><span style=\"font-size: 10pt;\">იუსტიციის სამინისტროს შესაბამის უფლებამოსილ პირს უფლება აქვს, კანონის</span><br /><span style=\"font-size: 10pt;\">შესაბამისად მოიძიოს საჭირო ინფორმაცია, მათ შორის, პერსონალური მონაცემი.</span><br /><span style=\"font-size: 10pt;\">თუ განაცხადის ავტორი აკმაყოფილებს ამ კანონის მე-2 მუხლით დადგენილ</span><br /><span style=\"font-size: 10pt;\">უცხოური ძალის ინტერესების გამტარებელი ორგანიზაციის კრიტერიუმებს და</span><br /><span style=\"font-size: 10pt;\">განაცხადი სწორად და სრულყოფილად არის შევსებული, სააგენტო ვალდებულია,</span><br /><span style=\"font-size: 10pt;\">მისთვის განაცხადის წარდგენიდან 30 სამუშაო დღეში დაარეგისტრიროს</span><br /><span style=\"font-size: 10pt;\">განაცხადის ავტორი უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span><br /><span style=\"font-size: 10pt;\">და აღრიცხოს იგი უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციათა</span><br /><span style=\"font-size: 10pt;\">რეესტრში. თუ განაცხადი არასწორად ან/და არასრულყოფილად არის შევსებული,</span><br /><span style=\"font-size: 10pt;\">სააგენტო განაცხადის ავტორს განუსაზღვრავს 10 სამუშაო დღის ვადას ხარვეზის</span><br /><span style=\"font-size: 10pt;\">აღმოსაფხვრელად. განაცხადის ავტორი ვალდებულია, ამ ვადაში აღმოფხვრას</span><br /><span style=\"font-size: 10pt;\">ხარვეზი. სააგენტო ვალდებულია, ამ ვადის გასვლიდან 5 სამუშაო დღეში</span><br /><span style=\"font-size: 10pt;\">დაარეგისტრიროს განაცხადის ავტორი უცხოური ძალის ინტერესების გამტარებელ</span><br /><span style=\"font-size: 10pt;\">ორგანიზაციად და აღრიცხოს იგი უცხოური ძალის ინტერესების გამტარებელ</span><br /><span style=\"font-size: 10pt;\">ორგანიზაციათა რეესტრში, თუ განაცხადის ავტორი აკმაყოფილებს ამ კანონის მე-</span><br /><span style=\"font-size: 10pt;\">2 მუხლით დადგენილ უცხოური ძალის ინტერესების გამტარებელი ორგანიზაციის</span><br /><span style=\"font-size: 10pt;\">კრიტერიუმებს.</span><br /><span style=\"font-size: 10pt;\">4</span><br /><span style=\"font-size: 10pt;\">5. სუბიექტის უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span><br /><span style=\"font-size: 10pt;\">რეგისტრაციისა და უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციათა</span><br /><span style=\"font-size: 10pt;\">რეესტრში აღრიცხვისათვის საფასური არ გადაიხდევინება.</span><br /><span style=\"font-size: 10pt;\">6. სუბიექტის უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span><br /><span style=\"font-size: 10pt;\">რეგისტრაციისა და უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციათა</span><br /><span style=\"font-size: 10pt;\">რეესტრის წარმოების წესებს, აგრეთვე განაცხადის ფორმას ადგენს საქართველოს</span><br /><span style=\"font-size: 10pt;\">იუსტიციის მინისტრი.</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 5. განაცხადის, სხვა სათანადო დოკუმენტებისა და უცხოური ძალის</span></strong></em></span><br /><span style=\"font-size: 10pt;\">ინტერესების გამტარებელ ორგანიზაციათა რეესტრის საჯაროობის უზრუნველყოფა</span><br /><span style=\"font-size: 10pt;\">1. განაცხადი და ამ კანონის მე-4 მუხლის პირველი პუნქტით</span><br /><span style=\"font-size: 10pt;\">გათვალისწინებული განცხადება საჯაროა. სააგენტო ვალდებულია, სუბიექტის</span><br /><span style=\"font-size: 10pt;\">უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად რეგისტრაციისთანავე</span><br /><span style=\"font-size: 10pt;\">უზრუნველყოს ამ სუბიექტის მიერ სააგენტოსთვის წარდგენილი განაცხადის, ამ</span><br /><span style=\"font-size: 10pt;\">კანონის მე-4 მუხლის პირველი პუნქტით გათვალისწინებული განცხადების,</span><br /><span style=\"font-size: 10pt;\">ხოლო არსებობის შემთხვევაში  აგრეთვე აღნიშნული სუბიექტის მოქმედი</span><br /><span style=\"font-size: 10pt;\">წესდების, მისი სხვა სადამფუძნებლო დოკუმენტებისა და საჯარო რეესტრიდან ამ</span><br /><span style=\"font-size: 10pt;\">სუბიექტის შესახებ ბოლო ამონაწერის სათანადო ვებგვერდზე განთავსება და</span><br /><span style=\"font-size: 10pt;\">საჯაროდ ხელმისაწვდომობა.</span><br /><span style=\"font-size: 10pt;\">2. უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციათა რეესტრში</span><br /><span style=\"font-size: 10pt;\">შეტანილი ინფორმაცია საჯაროა. სააგენტო ვალდებულია, უზრუნველყოს მისი</span><br /><span style=\"font-size: 10pt;\">სათანადო ვებგვერდზე განთავსება და საჯაროდ ხელმისაწვდომობა.</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 6. ყოველწლიური საფინანსო დეკლარაცია</span></strong></em></span><br /><span style=\"font-size: 10pt;\">1. უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span><br /><span style=\"font-size: 10pt;\">რეგისტრირებული სუბიექტი ვალდებულია, უცხოური ძალის ინტერესების</span><br /><span style=\"font-size: 10pt;\">გამტარებელ ორგანიზაციად რეგისტრაციის წლის ყოველი შემდგომი წლის</span><br /><span style=\"font-size: 10pt;\">იანვრის თვეში ელექტრონულად, საქართველოს იუსტიციის მინისტრის მიერ</span><br /><span style=\"font-size: 10pt;\">დადგენილი ფორმის დაცვით შეავსოს და სააგენტოს წარუდგინოს საფინანსო</span><br /><span style=\"font-size: 10pt;\">დეკლარაცია, რომელშიც მან სწორად და სრულყოფილად უნდა ასახოს</span><br /><span style=\"font-size: 10pt;\">სააგენტოსთვის მისი წარდგენის წლის წინა წლის მდგომარეობით არსებული, ამ</span><br /><span style=\"font-size: 10pt;\">კანონის მე-4 მუხლის მე-3 პუნქტით გათვალისწინებული ინფორმაცია (ასეთი</span><br /><span style=\"font-size: 10pt;\">ინფორმაციის არსებობის შემთხვევაში). სააგენტო ვალდებულია, მისთვის</span><br /><span style=\"font-size: 10pt;\">აღნიშნული საფინანსო დეკლარაციის წარდგენიდან 30 სამუშაო დღეში</span><br /><span style=\"font-size: 10pt;\">გამოიკვლიოს და შეისწავლოს ეს საფინანსო დეკლარაცია, რისთვისაც</span><br /><span style=\"font-size: 10pt;\">საქართველოს იუსტიციის სამინისტროს შესაბამის უფლებამოსილ პირს უფლება</span><br /><span style=\"font-size: 10pt;\">აქვს, კანონის შესაბამისად მოიძიოს საჭირო ინფორმაცია, მათ შორის,</span><br /><span style=\"font-size: 10pt;\">პერსონალური მონაცემი. თუ აღნიშნული საფინანსო დეკლარაცია არასწორად</span><br /><span style=\"font-size: 10pt;\">ან/და არასრულყოფილად არის შევსებული, სააგენტო მის წარმდგენ უცხოური</span><br /><span style=\"font-size: 10pt;\">ძალის ინტერესების გამტარებელ ორგანიზაციად რეგისტრირებულ სუბიექტს</span><br /><span style=\"font-size: 10pt;\">განუსაზღვრავს 10 სამუშაო დღის ვადას ხარვეზის აღმოსაფხვრელად. აღნიშნული</span><br /><span style=\"font-size: 10pt;\">სუბიექტი ვალდებულია, ამ ვადაში აღმოფხვრას ხარვეზი.</span><br /><span style=\"font-size: 10pt;\">2. ამ მუხლის პირველი პუნქტით გათვალისწინებული საფინანსო</span><br /><span style=\"font-size: 10pt;\">დეკლარაცია და მასში ასახული ინფორმაცია საჯაროა. სააგენტო ვალდებულია,</span><br /><span style=\"font-size: 10pt;\">5</span><br /><span style=\"font-size: 10pt;\">დაუყოვნებლივ უზრუნველყოს აღნიშნული საფინანსო დეკლარაციის სათანადო</span><br /><span style=\"font-size: 10pt;\">ვებგვერდზე განთავსება და საჯაროდ ხელმისაწვდომობა.</span><br /><span style=\"font-size: 10pt;\">3. ამ მუხლით გათვალისწინებული საფინანსო დეკლარაციის წარდგენის</span><br /><span style=\"font-size: 10pt;\">წესს, აგრეთვე აღნიშნული საფინანსო დეკლარაციის ფორმას ადგენს საქართველოს</span><br /><span style=\"font-size: 10pt;\">იუსტიციის მინისტრი.</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 7. უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span></strong></em></span><br /><span style=\"font-size: 10pt;\">რეგისტრირებული სუბიექტის რეგისტრაციის გაუქმება</span><br /><span style=\"font-size: 10pt;\">1. უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span><br /><span style=\"font-size: 10pt;\">რეგისტრირებულ სუბიექტს, რომელიც წინა კალენდარული წლის მონაცემების</span><br /><span style=\"font-size: 10pt;\">(გარემოებების) მიხედვით აღარ აკმაყოფილებს ამ კანონის მე-2 მუხლით</span><br /><span style=\"font-size: 10pt;\">დადგენილ უცხოური ძალის ინტერესების გამტარებელი ორგანიზაციის</span><br /><span style=\"font-size: 10pt;\">კრიტერიუმებს, უფლება აქვს, სააგენტოსთვის ამ კანონის მე-6 მუხლით</span><br /><span style=\"font-size: 10pt;\">გათვალისწინებული საფინანსო დეკლარაციის წარდგენისას დასაბუთებული</span><br /><span style=\"font-size: 10pt;\">წერილობითი განცხადებით (მატერიალური ფორმით) მიმართოს საქართველოს</span><br /><span style=\"font-size: 10pt;\">იუსტიციის სამინისტროს და მოითხოვოს მისი უცხოური ძალის ინტერესების</span><br /><span style=\"font-size: 10pt;\">გამტარებელ ორგანიზაციად რეგისტრაციის გაუქმება. ამ შემთხვევაში 30 სამუშაო</span><br /><span style=\"font-size: 10pt;\">დღეში საქართველოს იუსტიციის სამინისტროს შესაბამისი უფლებამოსილი პირი</span><br /><span style=\"font-size: 10pt;\">საკითხის სათანადო გამოკვლევისა და შესწავლის საფუძველზე იღებს სათანადო</span><br /><span style=\"font-size: 10pt;\">გადაწყვეტილებას. ამ მიზნით, საქართველოს იუსტიციის სამინისტროს შესაბამის</span><br /><span style=\"font-size: 10pt;\">უფლებამოსილ პირს უფლება აქვს, კანონის შესაბამისად მოიძიოს საჭირო</span><br /><span style=\"font-size: 10pt;\">ინფორმაცია, მათ შორის, პერსონალური მონაცემი.</span><br /><span style=\"font-size: 10pt;\">2. სუბიექტის უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span><br /><span style=\"font-size: 10pt;\">რეგისტრაციის გაუქმების შესახებ გადაწყვეტილების მიღების შემთხვევაში</span><br /><span style=\"font-size: 10pt;\">სააგენტო ვალდებულია, ეს სუბიექტი დაუყოვნებლივ ამორიცხოს უცხოური</span><br /><span style=\"font-size: 10pt;\">ძალის ინტერესების გამტარებელ ორგანიზაციათა რეესტრიდან და შესაბამისი</span><br /><span style=\"font-size: 10pt;\">ვებგვერდიდან წაშალოს აღნიშნულ სუბიექტთან დაკავშირებით ამ კანონის</span><br /><span style=\"font-size: 10pt;\">შესაბამისად მანამდე გასაჯაროებული ინფორმაცია და დოკუმენტები.</span><br /><span style=\"font-size: 10pt;\">3. ამ მუხლის მე-2 პუნქტით გათვალისწინებული გადაწყვეტილება საჯაროა</span><br /><span style=\"font-size: 10pt;\">და ქვეყნდება სათანადო ვებგვერდზე.</span><br /><span style=\"font-size: 10pt;\">4. უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span><br /><span style=\"font-size: 10pt;\">რეგისტრირებული სუბიექტის რეგისტრაციის გაუქმების წესს ადგენს</span><br /><span style=\"font-size: 10pt;\">საქართველოს იუსტიციის მინისტრი.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 8. მონიტორინგი</span></strong></em></span><br /><span style=\"font-size: 10pt;\">1. უცხოური ძალის ინტერესების გამტარებელი ორგანიზაციის</span><br /><span style=\"font-size: 10pt;\">გამოსავლენად ან ამ კანონის რომელიმე მოთხოვნის შესრულების შესამოწმებლად</span><br /><span style=\"font-size: 10pt;\">საქართველოს იუსტიციის სამინისტრო უფლებამოსილია, ნებისმიერ დროს</span><br /><span style=\"font-size: 10pt;\">განახორციელოს საკითხის სათანადო კვლევა და შესწავლა  მონიტორინგი</span><br /><span style=\"font-size: 10pt;\">(შემდგომ  მონიტორინგი).</span><br /><span style=\"font-size: 10pt;\">2. მონიტორინგის დაწყების საფუძველია:</span><br /><span style=\"font-size: 10pt;\">ა) საქართველოს იუსტიციის სამინისტროს შესაბამისი უფლებამოსილი</span><br /><span style=\"font-size: 10pt;\">პირის გადაწყვეტილება;</span><br /><span style=\"font-size: 10pt;\">6</span><br /><span style=\"font-size: 10pt;\">ბ) საქართველოს იუსტიციის სამინისტროსთვის წარდგენილი წერილობითი</span><br /><span style=\"font-size: 10pt;\">განცხადება, რომელიც შეიცავს უცხოური ძალის ინტერესების გამტარებელ</span><br /><span style=\"font-size: 10pt;\">კონკრეტულ ორგანიზაციასთან დაკავშირებულ სათანადო მინიშნებას.</span><br /><span style=\"font-size: 10pt;\">3. მონიტორინგის განხორციელების მიზნით, საქართველოს იუსტიციის</span><br /><span style=\"font-size: 10pt;\">სამინისტროს შესაბამის უფლებამოსილ პირს უფლება აქვს, კანონის შესაბამისად</span><br /><span style=\"font-size: 10pt;\">მოიძიოს საჭირო ინფორმაცია, მათ შორის, პერსონალური მონაცემი.</span><br /><span style=\"font-size: 10pt;\">4. ერთი და იმავე სუბიექტის მიმართ მონიტორინგის განხორციელება</span><br /><span style=\"font-size: 10pt;\">დასაშვებია 6 თვეში მხოლოდ ერთხელ.</span><br /><span style=\"font-size: 10pt;\">5. თუ მონიტორინგის შედეგად გამოვლინდა, რომ სუბიექტი აკმაყოფილებს</span><br /><span style=\"font-size: 10pt;\">ამ კანონის მე-3 მუხლით დადგენილ უცხოური ძალის ინტერესების გამტარებელი</span><br /><span style=\"font-size: 10pt;\">ორგანიზაციის კრიტერიუმებს, მაგრამ მან უცხოური ძალის ინტერესების</span><br /><span style=\"font-size: 10pt;\">გამტარებელ ორგანიზაციად რეგისტრაციას თავი აარიდა, სააგენტო საქართველოს</span><br /><span style=\"font-size: 10pt;\">იუსტიციის სამინისტროს შესაბამისი უფლებამოსილი პირის მიმართვის</span><br /><span style=\"font-size: 10pt;\">საფუძველზე არეგისტრირებს აღნიშნულ სუბიექტს უცხოური ძალის ინტერესების</span><br /><span style=\"font-size: 10pt;\">გამტარებელ ორგანიზაციად, რაც ამ სუბიექტს არ ათავისუფლებს ამ კანონის მე-9</span><br /><span style=\"font-size: 10pt;\">მუხლის პირველი პუნქტით გათვალისწინებული პასუხისმგებლობისგან. ამ</span><br /><span style=\"font-size: 10pt;\">შემთხვევაში აღნიშნული სუბიექტი ვალდებულია, 10 სამუშაო დღის ვადაში ამ</span><br /><span style=\"font-size: 10pt;\">კანონის მოთხოვნათა დაცვით წარუდგინოს სააგენტოს განაცხადი.</span><br /><span style=\"font-size: 10pt;\">6. მონიტორინგის წესს ადგენს საქართველოს იუსტიციის მინისტრი.</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 9. პასუხისმგებლობა</span></strong></em></span><br /><span style=\"font-size: 10pt;\">1. უცხოური ძალის ინტერესების გამტარებელ ორგანიზაციად</span><br /><span style=\"font-size: 10pt;\">რეგისტრაციისთვის თავის არიდება ან ამ კანონის მე-6 მუხლით</span><br /><span style=\"font-size: 10pt;\">გათვალისწინებული საფინანსო დეკლარაციის იმავე მუხლით დადგენილ ვადაში</span><br /><span style=\"font-size: 10pt;\">წარუდგენლობა </span><br /><span style=\"font-size: 10pt;\">გამოიწვევს დაჯარიმებას 25 000 ლარის ოდენობით.</span><br /><span style=\"font-size: 10pt;\">2. ამ კანონის მე-4 მუხლის მე-2 პუნქტის მოთხოვნის შეუსრულებლობა, ამავე</span><br /><span style=\"font-size: 10pt;\">კანონის მე-4 მუხლის მე-4 პუნქტით ან მე-6 მუხლის პირველი პუნქტით</span><br /><span style=\"font-size: 10pt;\">გათვალისწინებული ხარვეზის აღმოფხვრის ვალდებულების შეუსრულებლობა ან</span><br /><span style=\"font-size: 10pt;\">ამ კანონის მე-8 მუხლის მე-5 პუნქტით განსაზღვრული განაცხადის წარდგენის</span><br /><span style=\"font-size: 10pt;\">ვალდებულების შეუსრულებლობა </span><br /><span style=\"font-size: 10pt;\">გამოიწვევს დაჯარიმებას 10 000 ლარის ოდენობით.</span><br /><span style=\"font-size: 10pt;\">3. ამ მუხლის მე-2 პუნქტით ან ამ პუნქტით გათვალისწინებული</span><br /><span style=\"font-size: 10pt;\">ადმინისტრაციული სამართალდარღვევის ჩადენისთვის</span><br /><span style=\"font-size: 10pt;\">ადმინისტრაციულსახდელდადებული პირის/სუბიექტის მიერ ამ მუხლის მე-2</span><br /><span style=\"font-size: 10pt;\">პუნქტით გათვალისწინებული ქმედების შესაბამისი ადმინისტრაციული</span><br /><span style=\"font-size: 10pt;\">სახდელის დადებიდან 1 თვის შემდეგ ჩადენა </span><br /><span style=\"font-size: 10pt;\">გამოიწვევს დაჯარიმებას 20 000 ლარის ოდენობით.</span><br /><span style=\"font-size: 10pt;\">6. ამ მუხლით გათვალისწინებული ადმინისტრაციული</span><br /><span style=\"font-size: 10pt;\">სამართალდარღვევის შესახებ ოქმს ადგენს საქართველოს იუსტიციის</span><br /><span style=\"font-size: 10pt;\">სამინისტროს შესაბამისი უფლებამოსილი პირი. აღნიშნული ადმინისტრაციული</span><br /><span style=\"font-size: 10pt;\">სამართალდარღვევის ჩადენისას სამართალწარმოება ხორციელდება საქართველოს</span><br /><span style=\"font-size: 10pt;\">ადმინისტრაციულ სამართალდარღვევათა კოდექსისა და სხვა სათანადო</span><br /><span style=\"font-size: 10pt;\">საკანონმდებლო აქტების შესაბამისად.</span><br /><span style=\"font-size: 10pt;\">7</span><br /><span style=\"font-size: 10pt;\">9. ამ მუხლით გათვალისწინებული პასუხისმგებლობის დაკისრება არ</span><br /><span style=\"font-size: 10pt;\">ათავისუფლებს შესაბამის სუბიექტს ამ კანონის მოთხოვნათა შესრულებისაგან.</span><br /><span style=\"font-size: 10pt;\">10. ამ მუხლით გათვალისწინებული პასუხისმგებლობა შესაბამისი</span><br /><span style=\"font-size: 10pt;\">ადმინისტრაციული სამართალდარღვევის ჩამდენს შეიძლება დაეკისროს ამ</span><br /><span style=\"font-size: 10pt;\">ადმინისტრაციული სამართალდარღვევის ჩადენიდან მხოლოდ 6 წლის</span><br /><span style=\"font-size: 10pt;\">განმავლობაში.</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 10. გარდამავალი დებულებები</span></strong></em></span><br /><span style=\"font-size: 10pt;\">1. ამ მუხლის ამოქმედებიდან 60 დღის ვადაში:</span><br /><span style=\"font-size: 10pt;\">ა) შესაბამისმა ორგანოებმა/თანამდებობის პირებმა მიიღონ/გამოსცენ ამ</span><br /><span style=\"font-size: 10pt;\">კანონის შესასრულებლად საჭირო კანონქვემდებარე აქტები და უზრუნველყონ</span><br /><span style=\"font-size: 10pt;\">სათანადო კანონქვემდებარე აქტების ამავე კანონთან შესაბამისობა;</span><br /><span style=\"font-size: 10pt;\">ბ) საქართველოს იუსტიციის სამინისტრომ და სააგენტომ განახორციელონ ამ</span><br /><span style=\"font-size: 10pt;\">კანონის შესასრულებლად საჭირო წინასწარი მატერიალურ-ტექნიკური და სხვა</span><br /><span style=\"font-size: 10pt;\">ღონისძიებები.</span><br /><span style=\"font-size: 10pt;\">2. ამ კანონის მე-2 მუხლის პირველი პუნქტით გათვალისწინებული</span><br /><span style=\"font-size: 10pt;\">სუბიექტი, რომელიც 2023 წლის მონაცემების (გარემოებების) მიხედვით</span><br /><span style=\"font-size: 10pt;\">აკმაყოფილებს იმავე მუხლით დადგენილ უცხოური ძალის ინტერესების</span><br /><span style=\"font-size: 10pt;\">გამტარებელი ორგანიზაციის კრიტერიუმებს, ვალდებულია, ამ პუნქტის</span><br /><span style=\"font-size: 10pt;\">ამოქმედებიდან 1 თვის ვადაში საჯარო სამართლის იურიდიული პირის </span><br /><span style=\"font-size: 10pt;\">იუსტიციის სახლის მეშვეობით წერილობით (მატერიალური ფორმით) მიმართოს</span><br /><span style=\"font-size: 10pt;\">სააგენტოს განცხადებით უცხოური ძალის ინტერესების გამტარებელ</span><br /><span style=\"font-size: 10pt;\">ორგანიზაციად დარეგისტრირების თაობაზე, რის შემდეგაც ხორციელდება ამ</span><br /><span style=\"font-size: 10pt;\">კანონის მე-4 მუხლით დადგენილი პროცედურები.</span></p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #e03e2d;\"><em><strong><span style=\"font-size: 10pt;\">მუხლი 11. კანონის ამოქმედება</span></strong></em></span><br /><span style=\"font-size: 10pt;\">1. ეს კანონი, გარდა ამ კანონის პირველიმე-9 მუხლებისა და მე-10 მუხლის</span><br /><span style=\"font-size: 10pt;\">მე-2 პუნქტისა, ამოქმედდეს გამოქვეყნებისთანავე.</span><br /><span style=\"font-size: 10pt;\">2. ამ კანონის პირველიმე-9 მუხლები და მე-10 მუხლის მე-2 პუნქტი</span><br /><span style=\"font-size: 10pt;\">ამოქმედდეს გამოქვეყნებიდან მე-60 დღეს.</span></p>\r\n<p style=\"text-align: left;\">&nbsp;</p>\r\n<p style=\"text-align: left;\"><br /><span style=\"color: #2dc26b;\"><strong><em><span style=\"font-size: 10pt;\">საქართველოს პრეზიდენტი: სალომე ზურაბიშვილი</span></em></strong></span></p>', 'კანონი „უცხოური გავლენის გამჭვირვალობის შესახებ“', '2024-05-19 12:28:43'),
(15, 'ბლაბლა', NULL, 'ბლაბლაბაბაბაბა', '<p>აწფდაფდფწაფდწაფდაფდაწ</p>', 'ტესტ', '2024-05-19 15:48:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `blog_id` int UNSIGNED DEFAULT NULL,
  `tag_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_tags`
--

INSERT INTO `blog_tags` (`blog_id`, `tag_id`) VALUES
(14, 7);

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `id` int UNSIGNED NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `docname` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `hypertext` longtext COLLATE utf8mb4_general_ci,
  `shortdesc` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doc_tags`
--

CREATE TABLE `doc_tags` (
  `doc_id` int UNSIGNED DEFAULT NULL,
  `tag_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linktree`
--

CREATE TABLE `linktree` (
  `id` int NOT NULL,
  `platform_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linktree`
--

INSERT INTO `linktree` (`id`, `platform_name`, `url`) VALUES
(1, 'facebook', 'https://www.facebook.com/'),
(2, 'instagram', 'https://www.instagram.com/'),
(3, 'twitter', 'https://twitter.com/home'),
(4, 'youtube', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int UNSIGNED NOT NULL,
  `tag_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`) VALUES
(7, 'კანონი'),
(8, 'მაქცია'),
(9, 'არარუსულკანონს');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int UNSIGNED NOT NULL,
  `content_id` int UNSIGNED DEFAULT NULL,
  `content_type` enum('blog','doc') COLLATE utf8mb4_general_ci NOT NULL,
  `views_count` int UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `content_id`, `content_type`, `views_count`) VALUES
(68, 0, 'blog', 1),
(70, 0, 'blog', 1),
(71, 0, 'blog', 1),
(72, 0, 'blog', 1),
(73, 0, 'blog', 1),
(74, 0, 'blog', 1),
(75, 0, 'blog', 1),
(76, 0, 'blog', 1),
(77, 0, 'blog', 1),
(78, 0, 'blog', 1),
(79, 0, 'blog', 1),
(81, 0, 'blog', 1),
(82, 0, 'blog', 1),
(83, 0, 'blog', 1),
(84, 0, 'blog', 1),
(85, 0, 'blog', 1),
(86, 0, 'blog', 1),
(87, 0, 'blog', 1),
(89, 0, 'blog', 1),
(90, 0, 'blog', 1),
(91, 0, 'blog', 1),
(92, 0, 'blog', 1),
(94, 0, 'blog', 1),
(95, 14, 'blog', 24),
(96, 0, 'blog', 1),
(97, 0, 'blog', 1),
(98, 0, 'blog', 1),
(99, 0, 'blog', 1),
(100, 0, 'blog', 1),
(101, 0, 'blog', 1),
(102, 0, 'blog', 1),
(103, 0, 'blog', 1),
(104, 0, 'blog', 1),
(105, 0, 'blog', 1),
(106, 0, 'blog', 1),
(107, 0, 'blog', 1),
(108, 0, 'blog', 1),
(109, 0, 'blog', 1),
(110, 0, 'blog', 1),
(111, 0, 'blog', 1),
(112, 0, 'blog', 1),
(113, 0, 'blog', 1),
(114, 0, 'blog', 1),
(115, 0, 'blog', 1),
(116, 0, 'blog', 1),
(117, 0, 'blog', 1),
(118, 0, 'blog', 1),
(119, 0, 'blog', 1),
(120, 0, 'blog', 1),
(121, 0, 'blog', 1),
(122, 0, 'blog', 1),
(123, 0, 'blog', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD KEY `blog_id` (`blog_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc_tags`
--
ALTER TABLE `doc_tags`
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Indexes for table `linktree`
--
ALTER TABLE `linktree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `linktree`
--
ALTER TABLE `linktree`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD CONSTRAINT `blog_tags_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`),
  ADD CONSTRAINT `blog_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `doc_tags`
--
ALTER TABLE `doc_tags`
  ADD CONSTRAINT `doc_tags_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `docs` (`id`),
  ADD CONSTRAINT `doc_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
