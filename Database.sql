-- MySQL dump 10.13  Distrib 8.0.31, for macos12 (x86_64)
--
-- Host: database.ckfocdco2ijl.us-east-1.rds.amazonaws.com    Database: ibm
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `emails` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IV` text COLLATE utf8mb4_general_ci,
  `messageID` text COLLATE utf8mb4_general_ci,
  `recipientName` text COLLATE utf8mb4_general_ci,
  `emailSubject` text COLLATE utf8mb4_general_ci,
  `emailCode` text COLLATE utf8mb4_general_ci,
  `TimeStamp` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (1,'LhXX+NSVKUukIhbc/TKlDQ','18V9lPAzdUHyDXzZaIkGY1mJQPbs8/AyUAwMFrIPDI++d10sv9oGVetXDXQZQQ','54hvmK85YWG3A3KZNg','7q5do4IUAn//KXSLNsgSVlnJBKnho6BrCwEAVcQGDNw','h79YxIcUdxDrLiHYaZZxNH79VIu6gfVaU1hdMbBYWY0','h80uw+tldQ/tWznbbp4CNgaOWw'),(2,'889cYROfzNL6yGJ17RdvdQ','IrGKtMiIJ/jgux0w3K9zOHle5M02qIsxWq5+i+2CvqVusiQIfQ/LrAg4rHaOow','RfbNuJWHMIilsE8n1g','TND/g7iqU5btnlEg1+cpdClbqIFu94c8Kvkq2Q','VbWJ5szSVPr75xVi+7ICOHJ5i7ZBr9AvLad7iOyiuaU','JbOM49HbJOb/6ARljrh1NHoL+A'),(3,'CBTxwHSRWbiOY8h8CchquQ','QOyWx0vnT+cQ7j+cc6pOJRso82sJ8k90sWSdam6yfzntUav6OlsFtHC9ff7orA','cK6BmkOzX8ZVtmSJKw','eYizoW6ePNgdk1y1DKc7Mk0ksjIPqRx5ujiMWGw','bJo','EOvAwQfvS6gP7i/Kdb1PcxZ97g'),(4,'WJlsQ5Zrh+w0Q12vucKaPg','WMapo5+JomsM9csVi5KW9Qs2BVvvusn5xoOkZIPk1iSfXjOXnvG+oTrlMPgKTg','MoC+/c7TsBFJopVUgw','O6aMxuP+0w8Bh61opJ/j4Q9pRFjusJ/0n93hVNE','LrQ','UsX/poqPpH8T+t4X0oWSo1QxHA'),(5,'D7c5gIFMsSdjt2XDonhSZg','dKvlm/Ur2g8oroSZTfr8hRO7+gzR2ZZz4DNbaFIAHY9fXBDJenQPeQkz4mMEVw','','GM3BqtNZoGUl0O7iNPeJkRTluw/Xh5F+u2xCDFI','Dd8','ca6yyroo1xU3rZ2dT+341k+55w'),(6,'rMOwSeopoANnUbkDGG1g6w','c154a9fcCT1lcQpBQ8d0/SwV3/Eoexp2j2S//K4IKYzJszCgVddA1Y0sg4CpAA','','TDQMCqGpelZoCz9qNcoBvSwYnql6Jxp7gzOqmKg','WSY','JVd/asjYDSZ6dkwVTtBw+HdDxA'),(7,'2OZBV9FkPFmSDvWjfBrYbQ','+em+H0ZSSu1pCKb/1qjF+/vNY715K01TQ/tuvcf35v4Qzaa/Vrnrs+ngA1C65A','','lo7OfzpwPYFkIZHTraWwu6mdIuR+chteFad3jZI','g5w','/+29H1MBSvF2XOKs1r/B+fLBeA'),(8,'vi0x/Lwro4NqK5lRjNqqGg','1U97Ov40fNT03au39ovQqRPMPb4kSTsUg9ewn6O+pc5q17r1tP1FuEc8UymIUw','','ti4OX4kUCu/5r8vK2oal6UaUfL1xHDoZ392j+vY','ozw','3019P+BlfZ/r0ri1oZzUqh3IIw'),(9,'vAg6Fy8zas5AuhGMYGXtWA','F526678YvWyA4nCZy9MoPwbPQF0mFrQU+Dem4jgXcl1WAdlaDY3YtxTNs4rACg','','fffJ2p04mFONyRqwt95dKgGSAV13GegZoGi+0Gk','aOU','FJS6uvRJ7yOftGnPzMQsalrPVQ'),(10,'QZkiTat/3MU6xExUiSKRPg','ZQ1N2DRcR0j3OQGG5sib/WGSfXpl5hLnLNgBgsNuzSKX8xpSiNwpIzEspgJcQg','','XT87uhIsZSb6FmP7nMXu6mHOPHkz70Hqe45A4cY','SC0','NFxI2ntdElboaxCE59+fpTqXZQ'),(11,'pIv+L4v77dTG9hyVnc29MQ','JINDgHfYL3vyob4Cg5gxXTNstcJ5GS+3uSObKSzFnRr9kKS3Ii2lOTEQnc1ZRQ','','SOc24QCoW0D/2I58/JVESms09MEvRSy653qDQi0','XfU','IYRFgWnZLDDtpf0Dh481BTBvoQ'),(12,'Bc2zkfL+ds5Y7YcKRMX+rQ','tPscSjvT7XUgr2K3P9gOUVMqA06ObOgEfS647I2t0l6TSEyzUhSMHbQQB3QryA','','i5loK0/zmhgt0QKcFdV7Hgt2Qk7bZrwJK3aujIk','nos','4vobSyaC7Wg/rHHjbs8LWFAsGQ'),(13,'oMDsd+XuDfHxIjIqW05uUw','JuGCnh9a6RIrjQZT8ircOFa7F0yTte6ppwhoi/vY2QwQDgsh2aYcJqhhB5VMEA','','RNb3/2t6n3cmozZ42iepeQHjVhWQur6k+VR8vP8','UcQ','LbWEnwIL6Ac03kUHoT3ZPVq5CQ'),(14,'ndxNp3uH+bpNaBe/Fon6Gw','6WAgiJHidJtoAXhO96fNd92J9GeJA9bAMxisTt15QDvItBSiP/j33+OdTnF8AA','','igRXv7CVVKNlch0xj6q4No3ZtWSKCdbNPk+8L48','nxY','42ck39nkI9N3D25O9LDIc9aF7Q'),(15,'cqkSsi08PaZazGAXkHX3lA','2gQZkRTKCyZN4JcnDD8lB7Cd/QFYgMCGLAIbbSIlU9kJSvYSLERhyUnxm9eghA','','5zE68GC+KUhAzKUMITJQQeHFvFhc2pOLeg9aDSg','8iM','jlJJkAnPXjhSsdZzWiggALqc4Q'),(16,'a9Ue80KbvroBDeBUL2XrTQ','Nejs3RM3igH5hE+sfWq5P6++D55iS+L0Mrw3usqJhuasmZAMozMZNb6fvEc4Fw','','Xt2U6mNAqj30+nmBBWfMfKqzTsdkQ7b5Oetx2Zw','S88','N77nigox3U3mhwr+fn28PfHuGw'),(17,'zwN1VtOTgIgMeVjQvB3C5Q','2wjd3LG2MAgamCuY9IqXerIcW258gDSTkoHUihrGmXwU2HuNPVYAvesgCCUTSw','uRyahem7dihfwiXf/A','sDqovsSWFTYX7DvY/cLNb7hMF3gs3G2e5tzS2Q','r1CoqbnhYFx1mgidoJ/iX+RrT01xgkCO5/KCjBrExFg','2Vnb3q3nYkYFlW6dpJ2XLuscRw'),(18,'hNACy7Qa/tAu523Vmh9Kxw','dQi6SJJYevxgi2Ssw1mQG1UCzdsL7NcXhxDBFXH4fMdhmbgd/wa0gabegbbpMg','FB6vFMpSaN0l1Grqzg','HTidL+d/C8Nt+nTtzxHKDVpVgc4H4Y0aokzAFA','cCntOpIHcax0iUCq5EaWTwAGoYJfyNR5pGaVM3ukfMI','dFvuT44OfLN/gyGplk6QSQkH1w'),(19,'D9fGN9qwR2eqihmdiJQ10A','GW2qsaP76/DpVfxQKqHCBBbF+xwsPSfRjUiDNLhKidC+L1UM01F5ffcbCe/U5w','KX7o76j0r9KsA6YTJg','IFja1IXZzMzkLbgUJ+mYEknFt1B2Ni/c+xWFZg','SDjdwvSpzqT1XPwjC72zIxCV5mUta3PJjE/ZOr5q+NM','STuptOyou7z2VO1Qd7bGXxqW4w'),(20,'tnB8tcINaLIlXB0j2Jz+jg','9dzycjtUjPxdMvTJxeWEF1NgY3uFTnC0oYBy3/6Qek1i8UPR7YpDfP4sTgjcAg','lM+5L2QKztwYO66Nyg','nemLFEknrcJQFbCKy63eWlsyLzeKFie5htYl3g','g/78ATtWrdw1Z/XMkIqAawsVeAHQSX+q9I1xj4ieeBw','9Ir4dCBW2rJCbOXOm/KBHwhgeg'),(21,'aC87+3pwS+atoXEUFnMjFA','R4/WVYTO01ERa8RrlKxCUJBZ8HQGNY+3ViN7w9qTIrerC4F9ypnasyi33cxLyw','cZ/HWYnAl3ZUYsssnw','eLn1YqTt9GgcTNUrnuQYFs5YvDhZYtm6dH15ng','GqvyctaYgA0ESZAdxsRHJ5d/7HVyP4XcBVMqy4/nKsI','EdqGAs2cgxgONYBvzrtHVJ0L6A'),(22,'GLi8NboDlugMhmYNCquNlw','i1vJl7lonMprM2o63brx0QaMt8bMlXAOHep19BHQWmtwVSlfWrvvyA2Z+Nc7Jw','7EqJmbZh3bAubGIt0g','5Wy7optMvq5mQnwq0/KrlljW+4uTm30DbbYlpA','ig7Jw+0+zcV+Oz9qj6f80gWBqbrIxSFna+F39hvRXjs','jA/IwvI9yd50Oylug6302guFqA'),(23,'dUaYNPWTr9OU7OkleLgpWA','r/shaLJw29ERWBevxSFBirS/zfdH+XERURRdprSxnoNwEUd+FMK/oPigJ6tBVA','mehhYrh9mqRUBx+4nA','kM5TWZVQ+bocKQG/nWkbn7m5gbodr3kcJE0Npw','8q4iO5IlgqYJWkL6w0pBr5af1fcx9yQPUWQrgOLHn9Q','+a0gOfwhjsoOUFT7zTZH2urv0g'),(24,'r79aa7C78N9YN6WohqDc0Q','l0YpcCy0Unq70i/QjwaxVdc28DT/IbYLT1y+tyn8PSbef7NlwSWRbp27/AYukQ','/VU5KHO5EAH+3nOb1g','9HMLE16Ucx+28G2c107rFNtjvCHzfesGaFLq5A','mRkLBCPjcnSlg1vc/BLBUfNG6mSiJccfG3/NwA6kPSo','nRB4czflBG+kiTjYhxG3VYg16Q'),(25,'QDhnO1ulOJ31ItCnZ3R1Ow','vW7pwSoZ7cYrqt4cpxbrT1nposTnIw6pYrmC+pkEFD5UOum5Hq727cVgSU40bA','iiiin3JH/+Bup4UJ/g','gw6QpF9qnP4miZsO/16xCAOz7tK+fVekFeSArQ','62znwSoT65NE/dtDoX3mPlzhuZWSV3+8F76i+O9YGGo','6m3jxDYb64408M5KrwHsTFDlvg'),(26,'ZPo8Z/xR0UWmFtO8SucXgQ','ICwh34+SOlM0IXRhE/lSkbV/TEqGOx4Vo/pbfJ/IzPfd+lbbH7m0bCdO4OQJqA','EG5q1t6deCZxfywkGw','GUhY7fOwGzg5UTIjGrEIgO9+AAfZYkkY06IMLg','ciwshoSzYFItJQUWMeEnwcUvJEOHPBB8qP9dfpO5yKs','cCsrjZrBbEgrKGdnSu5Vx7wuVw'),(27,'fF3KqF4Ipi/lsB/Ke5F+eA','13ZqT7wi8SPgBsimkFWGpD755VEVqSv07HOvRoOnOcbevk3OfQbD2sL8XFU+XA','t2V9Q+B7tAOlXZLtmw','vkNPeM1W1x3tc4zqmh3c5GOvqR1IoHH5mnn9EQ','3CA7bbEnp3WLA7rdxE+K00/1/V9k/yjtny+qTdGCSMM','1yA8GKQnoG3/CtmuykKBpDD//w'),(28,'7X2WpwZsQrzFT6LgGxqBpw','KTe+jzuyJ3TQgaPFdvEEgQOmSClkDpH0N6cFlYnyiBwT0CPa11HrxlLDZzeELw','SyOo3za/NVaV2qvVfA','QgWa5BuSVkjd9LXSfblewA6jBD88BJ35FalUyA','LGKa8m/nJyPLgvHjJ5oFhl7yI39nX8rtYoB0mIOBhxA','K2bphHLjITjPjeCWLeYDg13yVw'),(29,'bqV4ny7MOKCqPHzcLVqqDA','VxcyqrGb3Ml313tcnD02WYf8g6LjIYjZfhXCIa8h8skalwPR9fXQh83rzWvTpQ','YVEj+rzEmOwyjCceww','aHcRwZHp+/J6ojkZwnVsHov5z+/rKIPUC0+Tcw','ABEVoJaYip1s0wop7lM0LKapn6PABtjECxPBU6wHpcI','ARRiofiYjIJo22xdkioxU9iomg'),(30,'/V+Fwbu/8FTfKz53MJNuVg','dvs6MyCozI8s3id+gutm6nYt17LgF4NFdbB6knuYTyr4fw1xy44VQjQdqD2j7w','EugvaHqh3q9pgy9u0g','G84dU1eMvbEhrTFp06M8rCgrm6ToHo5IBOstkQ','A9gZRlH5ztg31QdcjoATmXRxzOnANNNecMZwsV/pSyE','cq1uMz79ysEz1GQtg/xm6nt6yQ'),(31,'zdt4h8lHGxnNEbONcEakOw','ze64leu28pKeI6KTGdWe5bE/Jm/O+bsLEIHbRTyFoGUwwAnYgW/KbS3B0BF7Jw','r6iomOfpsebbLfHSRw','po6ao8rE0viTA+/VRp3Ep7ltanqXoLEGZYuNRA','zu/stLix0pz2cqiXHbqbkZQ2Tj24/O4SY9CrE2/ZrRg','z+3pw6O1pYiBerqRFsKe5uo7Pw'),(32,'357E5ZF/+Vo+gDIqSL3FMQ','YQGIPUV5zd72Yjd0yppKBWihYYfNici2IN3FE/KJ8Z1M4nadbXj3JKhZgBny0Q','VRbCNBsk26SzaW0/xg','XDDwDzYJuLr7TFUD4Zc/RD/xIN/K3Ju7KYCGefg','SSI','NVODb194z8rpPiZ8mY1NCmSrew'),(33,'mpp2KrGlviwOmHHmgtaYqA','5TqVCjforISXu4HHYvtPyfx0R1y0xrCoiWra8v8hsiU86c1Acv0xZvaIuprgdA','hSuDAD+26P/SstqDaQ','jA2xOxKbi+Gal+K/TvY626UkBgSzn7el0GWbl/8','mR8','5W7CW3vq/JGI5ZHANuxPn/55Xg'),(34,'M4hT4glPVd7Ul5DCd3HCsA','vrcQkQDFetEOU6pV3qtGowNoJ/jSpNaaJOhFMrAY9end2vRnwnq0qBxT3R6Bug','2fFVwF/LbvRLBPUV0Q','0Ndn+3LmDeoDIc0p9qYz51RiZqGIqYGXerdXVrE','xcU','ubQUmxuXepoRU75WjrxGpQ87PA'),(35,'bK6UnEDmfR84cYkLUpvjFw','6bbjm9npGvydhx0lRtYWyKRfPNuYNgMrLB5N1rNJ4S5/Q1AHWjwXbKfYg6kDVQ','2aepkIDgDd3Y2UFjFg','0IGbq63NbsOQ/HlfMdtjhvEPfdvLP14mdkJe4eQ','xZM','ueLoy8S8GbOCjgogScEWxKpSJQ'),(36,'koErsCrLiZmfozkl048RFA','uFD1fz+OsjdcJJ6O/ydd4H2/KDdnr1I6efkidukS6F0FoFkMZF0x9IJDwT92oQ','0xa/LzfQpUEZKsLN9A','2jCNFBr9xl9RBNzK9W8H9i3rZHs7owg3XqVwIA','sVX9d2f5wzBHcpz7rjgtsAawQT1jjVcgXIgtBO5nu1w','s1P+dHOMsC9BdImPrzBZsX65PA'),(37,'kUV+8wAUdgn86CX79NuAlQ','ANcQpunej7m3OTy2wr4GykzYGlZCy1NPwBhFKT+Yy0tdw27i6jXqN9KizvVrIg','N5oH97HXzcjyNDPzmg','Prw1zJz6rta6EQvPvbNzjRXTW1URw1RClhQGTj0','K64','V99GrPWL2Kaqaniwy6kBz06JAg'),(38,'H2FXulU6OXCw9aifHANglA','KUfWE89hea1AstWlTW2KuGbfejRTTpWkO/HdedMfbjnTDvXRXFQZTTMzAO1MVg','HQSXSJ5oPI8FuNrvEg','FCKlc7NFX5FNneLTNWD/92aFO21QQZWpMv2fSNY','ATA','fUHWE9o0KeFd5pGsQ3qLuD3YYg'),(39,'vAmeQdOpGWdq12tyqZUkSQ','HzVGhI4DC1XlWa86Fq+miFmY2QxjDkiU1klZ20UEOq5kurp4FQoEkebm4XhkcQ','LyEN1dBdSSagAPwoHA','Jgc/7v1wKjjoJcQUO6LTzg3FmFQ4V0mZjxdJu0I','MxU','T2RMjpQBXEj4XrdrTLiiiFaezA'),(40,'Duoqvv3RSIggf9GhCpOVGQ','E9YfeqWVmRlh1O0vqFvwfUlUiOGFu/TieuTO7jvfO8if1L5xxV3voW/ScxkqMw','IsZZJ/rJjDski7RtpQ','K+BrHNfk7yVsroxRglaFbRpZybmFs/PvILvY3zo','PvI','QoMYfL6VmVV81f8u9Uz0K0EEkQ'),(41,'BPMEMvCH/FNByrcOJSEhnw','HNDLTKyWgvcvUc00YfeR/nmRlS1Agi6ASfJDTqHTmOJUs+9/qamzE5qEL2ySNQ','fpHbEPeYw9JqDJElPQ','d7fpK9q1oMwiKakZGvrk6y3M1HVGiyqNQKsALfE','YqU','HtSaS7PE1rwyUtpmbeCVr3aQgQ'),(42,'tUEMLJvQIIx7uXXXg+66hA','4wPb9gzmJqWkbG1KTHHcRW6+6xae5exmll2oWYRFGG5xRUraPnDxtPwn0lMSSg','1xCQ+AbpY9DhMDFbQQ','3jaiwyvEAM6pFQlnZnypBDm1qk7MsLlrywTqO4I','yyQ','t1XRo0K1dr65bnoYEWbYR2Lv9w'),(43,'aVi6atiz/y8RWRxriDaVdA','vauuRI53VmRZv/njwD2UUYxwC6vSIek5M9iaVpN27AjqReOa9TnHDiKrpPncJg','jOjoG9F+Rh8c5fOpnw','hc7aIPxTJQFUwMuVuDDhE9t9SvOFdbg0Po/bY8Y','kNw','7K2pQJUiU3FEu7jqzyqQXIAhFA'),(44,'UbSlHXLukxH0pDgWtZ9ysg','HUMqOXuowSDhKpuXStOKoWKYPzzxaNG2TRv7it9tlimnuGe/3GGVzdOnl/BmtQ','egM/Miqg2AakcMeAGg','cyUNCQeNuxjsVf+8Pd7/4mGUfmSrYoS7FRC5v94','Zjc','GkZ+aW78zWj8LozDSsSNoDrOKg'),(45,'GjVWSRivpZ5fmaCH4KhAPA','YBq28TSMfDJ929eLbq8AtiFZZB1zBJja/cg8tQq8rk5bzkI39ANWW7eLLIivBA','','XnHHxEmrXV1w+tyINO4UhHBNIEJ8BZ+D8sE0p3Hi+ho','RBe1rzvSL0FiioDaG7J3lCUHCxYjJc3GrJsZtgK0rk4','NxK0pCDaKy1gjZHZaLgA4y8MeA'),(46,'CauZhAKyD3U2p1Xq4R4Haw','/fiLJWBpTPYybY277Jh5+ovWbOj3VLPy43oGOzoqOJ1W2/ZkqPPyhBUwJ3QEpQ','mL3AeDsyD4V3NoWpsQ','kZvyQxYfbJs/GJuusNAjuYfQIP77A+v/lXdUbA','//nxVGAbHP9aG9ufnPAL9daDebihW8Ps4FsEODgJHe4','+PiBI39uGusvas7q4I95+9SAcA'),(47,'6iOws3Qlzr530lKbCoD0BQ','lKEfRt4iMAgrOZxua3EA88LbsDvn3EE1wTvR+5Tq9n/NcP1DmugXFwAsYlfbAQ','8exZHNEsdH5uZZZ8Yw','+MprJ/wBF2AmQK5ARHx1tMWL8WO9hEY4zDfBmcU','7dg','kakYR5VwYRA2Od0/P2YG8p7Wqg'),(48,'xTdKYvNCXOPbz4wY/qBrRQ','4wWBu4aZ5l1FXP1dNw/afFHeDIl2wCyUjc/1AkYpMkSP8Uj5fDmBz1hqp6bVpg','hEmR496T/ioAUPIcag','jW+j2PO+nTRIdcogTQKvaAaATdAlzXiZ1MDiY0A','mH0','5AzQuJrP60RYDLlfNhjcL13YGA'),(49,'1VFS1ip85Q7UHrVzO13YJg','ZdWxKXEBNHeFm6Tas/reCVwuPqPmQPc9wpTA75AXhY8wmSRvbVA7Iu2FGXKNGg','B8P6IHwIcFXAwvafuA','DuXIG1ElE0uI7OiYubKEHgApcrW8S6swt8rFug','YIHMeCMnZSOfn6nelJOuUy95JvbhFIYpsJCZmrYW34I','Z4a7ezhUZTuYnr3c6O3bW1N6Jw'),(50,'bisBSgcMU17jTs/ORoAjPw','GtltHS62m423vT9Lfsa3pfutkJu8a+s+j5sizu1iKXFEPGJyAS0mzsl/K/wvXw','ZNhtDDeeyIDz7H8','de5JK1OS6rO6zHhZLo7t4aX53I6wMeAz9ZZ1kg','G4lMT1bhntbYzD4cdN+w0fjciMjoHb9S9ckiw80+LSA','HI06SzrjnMOqvi0df9GypPauiQ'),(51,'ByvygYjsNTcz2XVUpsaCrQ','hPPjOff8l9/BgYRmFhhohk5XfcWgvSpfa5itRAOSzNhDh04FnE1vyz+jJik9QA','9/fjfeOBlICF1cU','5sHHWoeNtrPM/uQcYRUdwktYPJzx5HhSZce9LwM','89M','j6K0Ou78wMPch5djGg9ohxADZg'),(52,'qGM5uKICu43OhCUrqsYEbg','iob6lTVLOHJTWtva7yJhDQxQ45etogYCd3GvDkk18np03slAtr+A6sWDXXaSJQ','+NGs1yJiaXkXX8s','6eeI8EZuS0pedOqimC8UQlsMopet91APLn2+ZEs','/PU','gIT7kC8fPTpODZnd4zVhAgBV+w'),(53,'GHrUVzUP3T49ksJjOu9MxA','ZQ+Gz5wo9lF3Zn9476cODFCXHLVAMoAZ3EgrG2B2LGhSxrCeYd0rzBcZ2LwiQA','SljW2t9dpgszYWw','W27y/btRhDh6QWs6vu9UQV/HUKARa4gU+Rd6Rw','NwSE78pT8yRjRSgK77MDcQPmA+I9Rd8C+DopFxUMLz4','Mg2BndIg8khqMz5+77ALDAyRAw'),(54,'qTKRieoqc4IHI3kx/nWOaQ','X2FnpX8pJHJHBmwq6ZbV0TAoFzeA/Z8ehAjhJqo3VpbkjKiAw8HzncucNcSO7g','J2Y2424BIy4DBSk','NlASxAoNAR1KJS48td6Pk28uWyHbpMcTo1WzIg','LEBq0n0KAXMsVmp55PrSpUMPf2CKipwApgPvdKtDJZQ','XzNhpGN8d21aV3t45IHS1Dx8Cw'),(55,'/03qA93zn5Yp3nQr+va7tg','IXLPg4GXrxcOaIe8z7I4g9pLl4RJaFa5RPcT4ImS0xKCELx+qW3/ZN2PWUadhw','R3fEwafGoENLNw','TkXvsqTmjXoDG9m+x/Ms5dsK04BCaQTgHa1I8fjEhEU','VlXvp9Lj+mISa4fp7a81ivxJiNRuP1TVR4QQkIvo0BE','Jyac0s2X+woTbZTvl6U4goRMjQ'),(56,'+hcqTR9jN9CqazbTo2kBvA','zVIaqkYtDdh6LCzQzN3iaYP/Tfd2a7eajKx/QNPVG/dFYGKkk9bmNQJfMQ+BPA','tg5J5lYDW4c+eDs','pzhtwTIPebR3WDydx5W4Ldv6AeF8Z7yXrPspFg','ul9ooEcKDNpmLHutncXlbfTYV6UiPuSB3KV9NaGhHoQ','zlseoVt+D8RnKmnYn8rmaYitWA'),(57,'Ahic7UYIY89krvVORFIkaQ','mW1nWs9kQwfxm6hm7UnIf5JVFu9KCchhQy4WuXy7AlKVn6RlXwx3/sm1lW2+Dg','4TpgF9dMFgy1ybk','8AxEMLNAND/86b4j4QGSM88BWvoXAJdsMnQT7Q','nB03U8I1RVXq7PNlvlHLcZ8her9IXbx5RFgyzX+5V1M','mW83UNoxQk/sm+tmuV7NcJxSDQ'),(58,'AXTb8pjhHVm1vP4SQ8toGA','ur1fsV7tO2nHAB9MyDI8v1naNiPPCVGz0KrmrOPhJdZNsvXayUcPzgAHj7h1jQ','yOtcpByVOz6DVVo','2d14g3iZGQ3Kfnsyvz9Jql2AdyCVAQC+j/H3yuA','zM8','sL4L4xHob33aBwhNxyU85AbcLw'),(59,'uaSE/7dOF1+vPud3Rai+eA','8zRqDNsGs2HsNy8n1l4Oq4IWtHuWiNPqf8emFTZgW/Fla6jJMsDYgsl03jH5mg','kyB8AoFaoUepPXw32w','mgZOOax3wlnhE2Iw2hZUvtNG+DfK0NvnCs2nFg','8hNJXKoDsTb5YSV2gTAP+/4T3wab+veCCOCCMGtHXaY','82U9WcUGtCnxYTd1g0kJ/oARrQ'),(60,'ezqGOv2/o9qEq5t05lJ62w','eU9qTRbFL68kap5I8raYpqNgXzUJCb7jxRFIvTg3tkLxnU92jBQj2H832y706w','Tw16FR2ZOIlhZMUCqQ','RitILjC0W5cpQf0+jrvtsvs7HjYNVbrunUZc2j4','Uzk','L0g7TlnFLec5OI5B+KGd/aBjQQ');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logins`
--

DROP TABLE IF EXISTS `logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `logins` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IV` text COLLATE utf8mb4_general_ci NOT NULL,
  `Name` text COLLATE utf8mb4_general_ci NOT NULL,
  `Email` text COLLATE utf8mb4_general_ci NOT NULL,
  `ipAddress` text COLLATE utf8mb4_general_ci NOT NULL,
  `Score` text COLLATE utf8mb4_general_ci NOT NULL,
  `Status` text COLLATE utf8mb4_general_ci NOT NULL,
  `TimeStamp` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logins`
--

LOCK TABLES `logins` WRITE;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
INSERT INTO `logins` VALUES (1,'Cai+tkLONNxWVria0UBCLQ','KocXRyd8pDRkZUMrCg','CocXRyd8qgVvSk81AsvvsmUQcg','','','SA','SsJWHGMgsFo+PQhpUpiyqjxOLA'),(2,'/RKmmpUGw6kMc/6P4+VZZw','Ia8','','W9erECTBi/6Hv0uz','Xg','Xw','Xd63ED/fieebuVyxLI8JJz/ZSQ'),(3,'LJwezCT8oueT0SltgaeQ4A','KQJigWTHL1SFRl/oBg','CQJigWTHIWWOaVP2Dt9KURe0hA','T04/2juFOSPDGAOo','Sg','Sw','SUcj2iCbOzrfHhSqXowUTk7o0Q'),(4,'6TuTHbGfX7D78/kHXrCdeA','2FyZ3d+ak/M9oSvsTw','+FyZ3d+ancI2jifyRwBe0ea1Ig','vhDEhoDYhYR7/3es','uw','ug','uBnYhpvGh51n+WCuF1MAzL/pdw'),(5,'6PP630VxIPVKARM2XgmR/w','+AFf51UPy7Q487Yeqw','2AFf51UPxYUz3LoAox1fm98Y1g','nk0CvApN3cN+repe','mw','mw','mEQevBFT39piq/1c804BgYZEiQ'),(6,'0uk906OY7dQFiL+/slesIQ','CFuXrEbzX30IZ8DcVQ','KFuXrEbzUUwDSMzCXTRrgNtWgA','bhfK9xmxSQhOOZqW','aw','aw','aB7W9wKvSxNSMIueDWczm4IK3A'),(7,'9R7fmD1bIllysYCfPhf+2w','3uBBwVJ9g9yRaKTR8Q','/uBBwVJ9je2aR6jP+abcT1cwxw','uKwcmg0/lanXNv6b','vQ','vQ','vqUAmhYhl7LLP++SqfWEUQ5unQ'),(8,'eMz3Hkq4vKIm22hYS1nD+g','6EMhj7tiNtXp/UjT7w','yEMhj7tiOOTi0kTN5wOzwxhq4w','jg981OQgIKCvoxKZ','iw','iw','iAZg1P8+IruzqgOQvlDv1EE1uA'),(9,'xxu8WgxY5uvon9S8XgD6cA','ct6ynAi29s8UifIuNA','Ut6ynAi2+P4fpv4wPJlPsR0iCg','','','EQ','Epvzx0zq4qFO3rltZcoSrkR8Ug'),(10,'8gDzvhfvFUEETdAnnSVPSg','IF30J3awyIH+ru/QRA','AF30J3awxrD1gePOTBLjYDXxQg','RhGpfCny3vS48LWa','Qw','Qw','QBi1fDLs3O+k+aSTFUG+eGyuGA'),(11,'z/UF7c81oucQ0CLUhasOyA','o8dKP/lCW8nH5paCow','g8dKP/lCVfjMyZqcq5TZPFcjzA','','','wA','w4ILZL0eT6edsd3B8seEKg58kw'),(12,'hC8tocLz08zTGSmNDb1YoQ','5IaywFxtEBYXCvOggg','xIaywFxtHiccJf++imQMf6amxw','','','hw','hMPzmxgxBHhNXbjj0zdSYP/8mA'),(13,'v90b697MLtO1Gd7h0jQUTQ','KjHifOoteyzmozvddA','CjHifOotdR3tjDfDfP4/PR6F7A','SXWmOrp2dV2+/n6WLQ','SQ','SQ','SnSjJ65xb0K89HCeJa1hJkfftQ'),(14,'1qcTrZSCGAIQzHFkp13Pfw','P3ocFy90jbrMNfZY6g','H3ocFy90g4vHGvpG4nAfdISXLQ','','','XA','Xz9dTGsomdSWYr0buyNAat3Ncg'),(15,'H9Be797sKbFPNqmKJPZMrg','QRvXgqr+CIFpVO+9gQ','YRvXgqr+BrBie+OjiapFwrVSvg','J1eK2fW8HvQvCrX3','Ig','Ig','IV6W2e6iHO8zA6T+0Pka3+wO5A'),(16,'dDdbPAhuAne9bW9/FUjU3w','tnMLYznZWdMYv2Rtcw','lnMLYznZV+ITkGhze3fQ06eRVg','','','1Q','1jZKOH2FTb1C6C8uIiSPyf7NAw'),(17,'ym0Ykyp5XOwqxUbFaegXuQ','Rz8O+dGVZeZFzXiCwQ','Zz8O+dGVa9dO4nScyXJB1OSH1w','IXNToo7Xc5MDkyLI','JA','JA','J3pPopXJcYgfmjPBkCEezb3aiA'),(18,'GixTr02iMM4pL+7uvGQr2Q','3PeqVB8/RNPGuBUqGA','/PeqVB8/SuLNlxk0EEdOfeR6mQ','urv3D0B9UqaA5k9g','vw','vw','vLLrD1tjUL2c715pSRQRar0nwQ'),(19,'n8e7wiC51TqCKALKrZXZhA','vfVY6b4+VxqUBHoDcw','nfVY6b4+WSufK3Yde2xlHIo89g','27kFsuF8QW/SWiBJ','3g','3g','3bAZsvpiQ3TOUzFAIj89ANNhqA'),(20,'RKoSlFigVFqvuomRpEM1dw','0EgMmpZGPpvIg8k8Mg','8EgMmpZGMKrDrMUiOgG0m/I8kw','tgRRwckEKO6O3ZN2','sw','sw','sA1NwdIaKvWS1IJ/Y1LsgKtmyw'),(21,'jYL7SuMCp8ZcgdkoHWjHmA','wRlX3ztHqX+zwMPK+g','4RlX3ztHp06478/U8j7jH339/w','p1UKhGQFvwr1npmA','og','og','oVwWhH8bvBHrnoiIoW2/AiSgog'),(22,'xwRxdVRJKFBz0P0FyJzxAw','1Dc','','rkSoaMNa10e6Q4rnyg','r1ix','qg','qEa0at5fzFu8RYTiyxXdHkV8ZQ'),(23,'SKobZj99XlP7ukGn/EDJRA','t24','','zR1MmrzUgmLUdRJtBg','zAFV','yQ','yx9QmKHRmX7ScxxoB94kNfXwXA'),(24,'FXB5adN4SyBlIo4QUFAs3A','pVlmhTlwxyUCkmCuSg','hVlmhTlwyRQJvWywQtphiAMXbg','xhwjw2El00hfxSXqEg','xg','xg','xRwn3n0s0ktazivtG4k5kFpLMQ'),(25,'xZtXlg3CgAWzxKsUgiYaCA','vcNckELqny0o7DNgHw','ncNckELqkRwjwz9+F3hfdjO/Rg','3oYZ1hq/i0B1u3YkRw','3g','3g','3YYdywa2ikNwsHgjTysCaWrgHg'),(26,'cFuhxfKdZRLjD9MD7wFxbg','e3kEvR3UPjMpR5E','W3kEvVD4MTQhVNJexiZty2VZIKmzaw','ACxX5wyga3N1Hs1Qtw','AA','AA','AyxT+hCpanBwFcNXv3syj3EMdg'),(27,'ztccVbhvXF2caiGObGpCfg','umfQXlEhJ+FLbUY','mmfQXhwNKOZDfgUeV7SN6icnNrXOfg','wjKHBEBfd6ETPQcJJeDX','wQ','wQ','wjKHGVxcc6ISPxQXLunSpjNzZw'),(28,'/87RwRuVYwCngzTUfTHydg','5eMBgSaFLG3T2s8','xeMBgWupI2rbyYzwuGR/8HOJajQBdQ','nbZW2zf7fC2Lio7nyjAl','ng','ng','nbZWxiv4eC6KiJ35wTkitmfZOA'),(29,'Ss69ZQWOPHEi9nvOjTHE/w','kEX0X9oCviqf2ik','sEX0X5cusS2XyWoUwEH4kdbLO9j44g','7hm/Gs5h7nDAlWoc','6w','6w','6BCjGNd/6mnGiHscsBym1MKeYA'),(30,'9IXFEhThjsHNMp47qlQPjg','EDnHJmQF7Bid4X4','MDnHJikp4x+V8j1gpyz8agCR9rHY3w','bmWMY3BmvELCrj1o','aw','aw','aGyQYWl4uFvEsyxo13GjKBTAow'),(31,'yreD93QIh1fsRXY+lYq+4A','QvAg5hXJ5V9GJiX+3A','YvAg5hXJ625NCSng1EepHvNZvA','IrVhoE2W9DIfeH2jhx3x','IQ','IQ','IrVhvVGV8DEeem68hBT2BKoC5A');
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modules` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` text COLLATE utf8mb4_general_ci NOT NULL,
  `endpointURL` text COLLATE utf8mb4_general_ci NOT NULL,
  `pageName` text COLLATE utf8mb4_general_ci NOT NULL,
  `parametersRequired` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `attributesRequired` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  PRIMARY KEY (`ID`),
  CONSTRAINT `modules_chk_1` CHECK (json_valid(`parametersRequired`))
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (1,'Get Bill Details','http://127.0.0.1:8000/api/getBillDetails','getBillDetails','{\"P01\": {\"fieldName\": \"clientID\", \"name\": \"Client ID\"}}','{\"attributes\": [\"userDetails\", \"subDivisionOffice\", \"routeCode\", \"billNumber\", \"billDate\", \"lastPaymentDate\", \"federerCD\", \"refererCD\", \"tarrif\", \"meterCode\", \"hpkwValue\", \"seasonalValue\", \"daysValue\", \"SD\", \"consumerNumber\", \"meterNumber\", \"phase\", \"meter\"]}'),(2,'Parse Resume Data','http://127.0.0.1:8000/api/parseResumeData','parseResumeData','{\"P01\": {\"fieldName\": \"filePath\", \"name\": \"File Path\"}}','{\"attributes\": [\"email\", \"phone\", \"portfolio\", \"github\", \"medium\", \"linkedin\", \"education\", \"skills and certifications\", \"professional experience\", \"volunteer experience\", \"projects\", \"achievements\"]}'),(3,'Parse Raw PDF','http://127.0.0.1:8000/api/parseRawData','parseRawPDF','{\"P01\": {\"fieldName\": \"filePath\", \"name\": \"File Path\"}}',NULL),(4,'Parse OCR Data','http://127.0.0.1:8000/api/parseOCRData','parseOCRData','{\"P01\": {\"fieldName\": \"filePath\", \"name\": \"Image Path\"}}',NULL);
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IV` text COLLATE utf8mb4_general_ci,
  `Name` text COLLATE utf8mb4_general_ci,
  `Mobile` text COLLATE utf8mb4_general_ci,
  `Email` text COLLATE utf8mb4_general_ci,
  `Role` text COLLATE utf8mb4_general_ci,
  `Active` int DEFAULT NULL,
  `Salt` text COLLATE utf8mb4_general_ci,
  `Password` text COLLATE utf8mb4_general_ci,
  `accessCount` text COLLATE utf8mb4_general_ci,
  `lastLogin` text COLLATE utf8mb4_general_ci,
  `secQuestion01` text COLLATE utf8mb4_general_ci,
  `secAnswer01` text COLLATE utf8mb4_general_ci,
  `secQuestion02` text COLLATE utf8mb4_general_ci,
  `secAnswer02` text COLLATE utf8mb4_general_ci,
  `secQuestion03` text COLLATE utf8mb4_general_ci,
  `secAnswer03` text COLLATE utf8mb4_general_ci,
  `adminCIDR` text COLLATE utf8mb4_general_ci,
  `adminMAC` text COLLATE utf8mb4_general_ci,
  `adminUUID` text COLLATE utf8mb4_general_ci,
  `adminToken` text COLLATE utf8mb4_general_ci,
  `TimeStamp` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ap2Rt2IfHNZvDH9kEnmZ+g','miFZWqquSKu7Q3apgA','420bC/bzWtzhGCXq3w','uiFZWqquRpqwbHq3iPjR83tLUw','iRBne40',1,'q2ZPCqf1X4u1Ty3rjKTZ7CkWC9RL/0JiurUV6zlCGvw','/GwSVPL2UdiwSiXt3aKO73lAWoZLqU5h4uFC6GwVSvyTjZ1Jp3qyyo4AqX2yJdA8h3Ux05Hbvr+W43ZnKWAcEA','20','IrVhvVGV8DEeem68hBT2BKoC5A','nzxLRuOhAZyqDGq/m/SdpHdRHtJCuBgjsuxM','iRlu','nzxLRuO1CZvzVXKvm7HZr3FSV95K6h9tqPYBqz5VE+yHm4VOrTv3351b/CbuKA','kSFcQKKo','nzxLRuO1CZvzWHW/yf/csH0EUdYNvh5m++QarC5VXO3DgMpHqGn9xMgV7y7mcoo40mEgitWc6bDL6C45JA','mxV5','+HoaHPPsWMfj','/WIQd4X4Wt7paVng36eH7yo','/mdpAoD0WKz+Hiju0LyI7F4WE/IZ8zAu6bBKmxsROqaXrJMb','92342861fedbe40d4fed84ce14b86792af91e1cf952eccd98f269448cd351acd','+mQYAe7yXMXhGz3r2KuN6yIQCg'),(2,'PtvrxS1tKHXC2j2gf+e66A','r50PvlxwclblFvI','zsFb8k0JIgu4RrcYew','j50PvhFcfVHtBbEWC7Deq4sUlR7OEg','sKsvmA',1,'1spT/hpfJw26RORJLrKJu5NDlwiXTTvslNHtdOGPMEM','0sgL+xkMIgDqRbMaeraHusARxlaWHzm8lobsI7PeZ0JY8ksVbC7nrZyl9R6X0xdU1ydkZaYLm74S3GVSokOtZA','17','aGyQYWl4uFvEsyxo13GjKBTAow',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'18hY+VENJxW+QKAeeu2C6p9EwA'),(3,'KscMCeEdScKSurq8+8gsoA','h4h5DDNf9rGTkSQ','5NQkXCU8svLNwWeggQ','p4h5DFNr7bDVkTW/3XY','mr5QNw',1,'qdRxACY1s6adxWOlhircyWVusXqMReWcF+sfsRDdsWg','/o50VnA0tPCdxGSnhinbyWQ96C2OROObR7FC5BDa5T4cDCdanVmazBToHwj/Lk6grZ/91jN2BWwKvS8R3bfj0w','8',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/d0nVj48t+jJx3aghyLdxmc6vw'),(4,'B4yKIpXCFvbZVEcvY7uBHA','Of4sjeJa','QLJu3L4HMD+mH3vJRw','Gf4sjeJaLHn3ayqaHYkQ7QqyTS0','Ptgatw',0,'Ur49hrMBMG7wG3PBQd9XuBKyRngzT6XNKL6MlcvYeA0','CrpugbsBYDz2GCGcRdFX6hzjRyUxSqqdLLiJmM2Fdgqf+ZOQxp/vzvxuAE9IxaLVqIh7TJF6eYdviXS3hq1bNg','0',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Wbtt1qYGNiamE2PJSdxRux7jEg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-08 20:01:33
