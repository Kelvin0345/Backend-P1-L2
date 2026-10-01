USE `laravel`;

DROP PROCEDURE IF EXISTS SP_GetAllergeenById;

DELIMITER $$

CREATE PROCEDURE SP_GetAllergeenById(
    IN p_id INT
)
BEGIN
    SELECT 
          PROD.Naam as Naam
         ,PROD.Barcode Barcode
         ,ALLE.Naam as NaamAllergeen  
         ,ALLE.Omschrijving    
    FROM Product AS PROD
    LEFT JOIN ProductPerAllergeen AS PRAL ON PROD.Id = PRAL.ProductId
    INNER JOIN Allergeen as ALLE ON ALLE.Id = PRAL.AllergeenId
    WHERE PROD.Id = p_id;
END$$

DELIMITER ;

