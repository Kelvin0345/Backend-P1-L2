USE `laravel`;

DROP PROCEDURE IF EXISTS SP_GetLeverantieById;

DELIMITER $$

CREATE PROCEDURE SP_GetLeverantieById(
    IN p_id INT
)
BEGIN
    SELECT 
          LEVE.Naam AS NaamLeverancier
         ,LEVE.Contactpersoon AS Contactpersoon
         ,LEVE.LeverancierNummer
         ,LEVE.Mobiel AS Mobiel
         ,PROD.Naam AS NaamProduct
         ,DATE_FORMAT(PPLE.DatumLevering, '%d-%m-%Y') AS DatumLaatsteLevering
         ,MAGA.AantalAanwezig AS Aantal
         ,DATE_FORMAT(PPLE.DatumEerstVolgendeLevering, '%d-%m-%Y') AS DatumEerstVolgendeLevering
    FROM Leverancier AS LEVE
    LEFT JOIN ProductPerLeverancier AS PPLE 
    ON LEVE.Id = PPLE.LeverancierId
    
    LEFT JOIN Product AS PROD  
    ON PROD.Id = PPLE.ProductId

    LEFT JOIN Magazijn AS MAGA
    ON PPLE.ProductId = MAGA.ProductID
    
    WHERE PPLE.ProductId = p_id
    ORDER BY DatumLaatsteLevering ASC;
END$$

DELIMITER ;