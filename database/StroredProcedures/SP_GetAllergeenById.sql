USE `laravel`;

DROP PROCEDURE IF EXISTS SP_GetAllergeenById;

DELIMITER $$

CREATE PROCEDURE SP_GetAllergeenById(
    IN p_id INT
)
BEGIN
    SELECT 
          PROD.Naam AS Naam
         ,PROD.Barcode AS Barcode
         ,ALLE.Naam AS NaamAllergeen
         ,ALLE.Omschrijving
    FROM Product AS PROD
    LEFT JOIN ProductPerAllergeen AS PRAL 
        ON PROD.Id = PRAL.ProductId
    LEFT JOIN Allergeen AS ALLE 
        ON ALLE.Id = PRAL.AllergeenId
    WHERE PROD.Id = p_id;
END$$

DELIMITER ;