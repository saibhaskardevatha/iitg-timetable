START TRANSACTION;
--
-- Database: `cepstrum-timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `type` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

DROP TABLE IF EXISTS `friday`;
CREATE TABLE IF NOT EXISTS `friday` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `event_id` varchar(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

DROP TABLE IF EXISTS `monday`;
CREATE TABLE IF NOT EXISTS `monday` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `event_id` varchar(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `roll_data`
--

DROP TABLE IF EXISTS `roll_data`;
CREATE TABLE IF NOT EXISTS `roll_data` (
  `roll` varchar(100) NOT NULL,
  `de1` varchar(100) NOT NULL,
  `de2` varchar(100) NOT NULL,
  `de3` varchar(100) NOT NULL,
  `oe` varchar(100) NOT NULL,
  `hss` varchar(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

DROP TABLE IF EXISTS `thursday`;
CREATE TABLE IF NOT EXISTS `thursday` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `event_id` varchar(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

DROP TABLE IF EXISTS `tuesday`;
CREATE TABLE IF NOT EXISTS `tuesday` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `event_id` varchar(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

DROP TABLE IF EXISTS `wednesday`;
CREATE TABLE IF NOT EXISTS `wednesday` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `event_id` varchar(100) NOT NULL
);
COMMIT;
