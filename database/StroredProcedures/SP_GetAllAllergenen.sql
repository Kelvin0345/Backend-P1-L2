USE `laravel`;

DROP PROCEDURE IF EXISTS SP_GetAllAllergenen;

DELIMITER $$

CREATE PROCEDURE SP_GetAllAllergenen()
BEGIN
    SELECT 
         PROD.*            
        ,ALLE.*        
    FROM Product AS PROD
    Inner JOIN ProductPerAllergeen AS PRAL ON PROD.Id = PRAL.ProductId
    INNER JOIN Allergeen as ALLE ON ALLE.Id = PRAL.AllergeenId
    WHERE PROD.Id = 1;
END$$

DELIMITER ;