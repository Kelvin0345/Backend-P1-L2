USE laravel;

DROP PROCEDURE IF EXISTS SP_GetAllLeverantie;

DELIMITER $$

CREATE PROCEDURE SP_GetAllLeverantie()
BEGIN
    SELECT PROD.Barcode
          ,PROD.Naam
          ,MAGA.VerpakkingsEenheidInKilogram
          ,MAGA.AantalAanwezig
          ,PROD.Id AS ProductId
    FROM Leverantie AS MAGA
    INNER JOIN Product AS PROD
        ON MAGA.ProductId = PROD.Id
    ORDER BY PROD.Barcode ASC;
END$$

DELIMITER ;