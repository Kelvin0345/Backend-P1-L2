USE `laravel`;

DROP PROCEDURE IF EXISTS SP_GetGeleverdeProductenByLeverancierId;

DELIMITER $$

CREATE PROCEDURE SP_GetGeleverdeProductenByLeverancierId(
    IN p_id INT
)
BEGIN
    select LEVE.Naam as NaamLeverancier
	   ,LEVE.ContactPersoon	AS ContactPersoon
       ,LEVE.LeverancierNummer AS LeverancierNummer
       ,LEVE.Mobiel AS Mobiel
       ,LEVE.Id AS LeverancierId
       ,PROD.Naam AS NaamProduct
       ,PROD.Id AS ProductId
       ,MAGA.AantalAanwezig AS AantalAanwezig
       ,MAGA.VerpakkingsEenheidInKilogram as VerpakkingsEenheid
       ,MAX(PPLE.DatumLevering) as DatumLaatsteLevering
FROM Leverancier AS LEVE
LEFT JOIN ProductPerLeverancier as PPLE 
ON LEVE.Id = PPLE.LeverancierId
LEFT JOIN Product as PROD
on PPLE.ProductId = PROD.Id 
LEFT JOIN Magazijn AS MAGA
ON PPLE.ProductId = MAGA.ProductID
WHERE LEVE.Id = p_id
GROUP BY PPLE.ProductId;
END$$

DELIMITER ;