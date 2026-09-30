USE `laravel`;

DROP PROCEDURE IF EXISTS SP_GetAllAllProducts;

DELIMITER $$

CREATE PROCEDURE SP_GetAllAllProducts()
BEGIN
    SELECT 
         PROD.*            
        ,ALLE.*        
    FROM Product AS PROD
    Inner JOIN ProductPerAllergeen AS PRAL ON PROD.Id = PRAL.ProductId
    INNER JOIN Magazijn as MAGA ON MAGA.Id = MAGA.MagazijnId
    WHERE PROD.Id = 1;
END$$

DELIMITER ;