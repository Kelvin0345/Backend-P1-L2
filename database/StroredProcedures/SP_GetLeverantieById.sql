USE `laravel`;

DROP PROCEDURE IF EXISTS SP_GetLeverantieById;

DELIMITER $$

CREATE PROCEDURE SP_GetLeverantieById(
    IN p_id INT
)
BEGIN
    SELECT 
          LEVE.Naam as NaamLeverancier
         ,LEVE.Contactpersoon as Contactpersoon
         ,LEVE.LeverancierNummer
         ,LEVE.Mobiel as Mobiel
         ,PROD.Naam as NaamProduct
         ,PPLE.DatumLevering as DatumLaatsteLevering
         ,PPLE.Aantal as Aantal
         ,PPLE.DatumEerstVolgendeLevering   
    FROM Leverancier AS LEVE
    LEFT JOIN ProductPerLeverancier AS PPLE ON LEVE.Id = PPLE.LeverancierId
    LEFT JOIN Product as PROD ON PROD.Id = PPLE.ProductId
    WHERE PPLE.ProductId = p_id;
END$$

DELIMITER ;
